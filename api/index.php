<?php

// 1. Buat folder sementara di /tmp khusus untuk Vercel Serverless
$tmpStorage = '/tmp/storage';
if (!is_dir($tmpStorage)) {
    mkdir($tmpStorage . '/framework/views', 0755, true);
    mkdir($tmpStorage . '/framework/cache', 0755, true);
    mkdir($tmpStorage . '/framework/sessions', 0755, true);
    mkdir($tmpStorage . '/logs', 0755, true);
}

// Load Composer & Bootstrap Laravel seperti biasa
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 2. TAMBAHKAN BARIS INI: Paksa Laravel menggunakan storage di /tmp
$app->useStoragePath($tmpStorage);

// Jalankan aplikasi
$app->handleRequest(Illuminate\Http\Request::capture());
