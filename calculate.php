<?php
// This function will calculate the amount and discount for a service
function calculateAmount($price, $quantity, $isLocal) {
    $amount = $price * $quantity; // Calculate the total amount
    $discount = $isLocal ? $amount * 0.05 : 0;  // Apply a 5% discount for local services
    return [$amount, $discount];  // Return both the amount and the discount
}
?>