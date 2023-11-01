<?php
$url = parse_url(getenv("DATABASE_URL"));

$server = $url["localhost"];
$username = $url["root"];
$password = $url["antifragile"];
$db = $url["restapi"];

$conn = new mysqli($server, $username, $password, $db);
