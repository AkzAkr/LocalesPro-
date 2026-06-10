<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Origin, Accept");
header("Access-Control-Max-Age: 86400");

if (($_SERVER["REQUEST_METHOD"] ?? "") === "OPTIONS") {
    http_response_code(204);
    exit;
}

header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "status" => "success",
    "message" => "Raw CORS header endpoint is reachable.",
    "origin" => $_SERVER["HTTP_ORIGIN"] ?? null,
    "time" => date("c"),
]);
?>
