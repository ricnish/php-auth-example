<?php
// This file just demonstrates the Basic Authentication acessing an API.
require_once 'auth.php';

// Basic authentication function
authAPI();

header('Content-Type: application/json');
echo json_encode(array('Hello' => 'World', 'version' => '1.0'));
