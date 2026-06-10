<?php
require_once "../../config/cors.php";

header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "status" => "success",
    "message" => "CORS debug endpoint is reachable.",
    "method" => $_SERVER["REQUEST_METHOD"] ?? null,
    "origin" => $_SERVER["HTTP_ORIGIN"] ?? null,
    "time" => date("c"),
]);
?>
