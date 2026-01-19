use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

Route::get('/files/test', function () {
    return <<<HTML
    <h3>Bucket test</h3>
    <form method="POST" action="/files/test/upload" enctype="multipart/form-data">
        <input type="file" name="f" required />
        <button type="submit">Upload</button>
    </form>
    HTML;
});

Route::post('/files/test/upload', function (Request $request) {
    $request->validate([
        'f' => ['required', 'file', 'max:20480'], // 20MB
    ]);

    $file = $request->file('f');

    $key = 'tests/'.now()->format('Ymd_His').'_'.Str::random(8).'_'.$file->getClientOriginalName();

    // Subir como privado
    Storage::disk('private')->putFileAs('', $file, $key);

    // URL temporal de descarga
    $tmpUrl = Storage::disk('private')->temporaryUrl($key, now()->addMinutes(10));

    return response()->json([
        'ok' => 1,
        'disk' => config('filesystems.default'),
        'key' => $key,
        'temporary_url_10m' => $tmpUrl,
    ]);
});

Route::get('/files/test/download', function (Request $request) {
    $key = $request->query('key');
    abort_unless($key, 400, 'Missing ?key=');

    // Verifica que exista
    abort_unless(Storage::disk('private')->exists($key), 404, 'Not found');

    // Descarga forzada (stream)
    return Storage::disk('private')->download($key);
});
