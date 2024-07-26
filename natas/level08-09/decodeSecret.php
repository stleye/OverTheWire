<?php
function decodeSecret($encoded) {
    // Step 1: Convert from hex to binary
    $binary = hex2bin($encoded);
    
    // Step 2: Reverse the string
    $reversed = strrev($binary);
    
    // Step 3: Decode from base64
    $decoded = base64_decode($reversed);
    
    return $decoded;
}

// Example usage:
$encoded = "3d3d516343746d4d6d6c315669563362"; // Replace with your encoded string
$decoded = decodeSecret($encoded);
echo $decoded;
?>

