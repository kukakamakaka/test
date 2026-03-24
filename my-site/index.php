<?php
// СТРОГО В ПЕРВОЙ СТРОКЕ: Глушим все ошибки старого движка
error_reporting(0);
ini_set('display_errors', 0);

require __DIR__.'/bootstrap/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

try {
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $e) {
    // Если упадет база, мы увидим только одну строку вместо простыни текста
    die("Database or Config Error: " . $e->getMessage());
}