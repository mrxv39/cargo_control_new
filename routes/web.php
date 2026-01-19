<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

Route::get('/check-share-links', function () {
    $exists = DB::getSchemaBuilder()->hasTable('share_links');

    return [
        'exists' => $exists,
        'count' => $exists ? DB::table('share_links')->count() : null,
    ];
});

Route::get('/share/temp', function (Request $request) {
    $request->validate([
        'path' => ['required', 'string'],
        'minutes' => ['nullable', 'integer', 'min:1', 'max:10080'], // hasta 7 días
    ]);

    $path = $request->query('path');
    abort_unless(Storage::exists($path), 404);

    $minutes = (int) ($request->query('minutes', 60));

    return redirect()->away(
        Storage::temporaryUrl($path, now()->addMinutes($minutes))
    );
});
