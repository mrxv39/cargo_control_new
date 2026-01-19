<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn () => 'pong');

Route::get('/files/test', function () {
    return <<<HTML
<!doctype html>
<html>
  <head><meta charset="utf-8"><title>Bucket test</title></head>
  <body>
    <h3>Bucket test</h3>
    <form method="POST" action="/files/test/upload" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="__CSRF__">
      <input type="file" name="f" required />
      <button type="submit">Upload</button>
    </form>
  </body>
</html>
HTML;
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::post('/files/test/upload', function (Request $request) {
    $request->validate([
        'f' => ['required', 'file', 'max:20480'], // 20MB
    ]);

    $file = $request->file('f');

    $key = 'tests/'.now()->format('Ymd_His').'_'.Str::random(8).'_'.$file->getClientOriginalName();

    Storage::disk('private')->putFileAs('', $file, $key);

    $tmpUrl = Storage::disk('private')->temporaryUrl($key, now()->addMinutes(10));

    return response()->json([
        'ok' => 1,
        'key' => $key,
        'temporary_url_10m' => $tmpUrl,
    ]);
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::get('/files/test/download', function (Request $request) {
    $key = $request->query('key');
    abort_unless($key, 400, 'Missing ?key=');

    abort_unless(Storage::disk('private')->exists($key), 404, 'Not found');

    return Storage::disk('private')->download($key);
});
