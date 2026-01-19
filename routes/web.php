<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Home (no depende de Vite)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return 'OK';
});

/*
|--------------------------------------------------------------------------
| Diagnostics (TEMP) - DB connectivity
|--------------------------------------------------------------------------
*/
Route::get('/check-db', function () {
    try {
        $row = DB::select('select 1 as ok');

        return response()->json([
            'db_connection' => config('database.default'),
            'ok' => $row[0]->ok ?? null,
        ]);
    } catch (\Throwable $e) {
        Log::error('check-db failed', ['error' => $e->getMessage()]);

        return response()->json([
            'error' => $e->getMessage(),
            'db_connection' => config('database.default'),
        ], 500);
    }
});

/*
|--------------------------------------------------------------------------
| Diagnostics (TEMP) - share_links existence
|--------------------------------------------------------------------------
*/
Route::get('/check-share-links', function () {
    try {
        $exists = DB::getSchemaBuilder()->hasTable('share_links');

        return response()->json([
            'exists' => $exists,
            'count' => $exists ? DB::table('share_links')->count() : null,
            'db_connection' => config('database.default'),
        ]);
    } catch (\Throwable $e) {
        Log::error('check-share-links failed', ['error' => $e->getMessage()]);

        return response()->json([
            'error' => $e->getMessage(),
            'db_connection' => config('database.default'),
        ], 500);
    }
});

/*
|--------------------------------------------------------------------------
| Share temporary link (private bucket -> public share URL)
|--------------------------------------------------------------------------
| Example:
| /share/temp?path=uploads/xxx.pdf&minutes=1440
*/
Route::get('/share/temp', function (Request $request) {
    $request->validate([
        'path' => ['required', 'string'],
        'minutes' => ['nullable', 'integer', 'min:1', 'max:10080'], // up to 7 days
    ]);

    $path = $request->query('path');
    $minutes = (int) ($request->query('minutes', 60));

    abort_unless(Storage::exists($path), 404);

    return redirect()->away(
        Storage::temporaryUrl($path, now()->addMinutes($minutes))
    );
});
