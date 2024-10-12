<?php
// Include the calculation function
include 'calculate.php';

// Customer Info
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';

// Service quantities
$service1_qty = isset($_POST['service1_qty']) ? $_POST['service1_qty'] : 0;
$service2_qty = isset($_POST['service2_qty']) ? $_POST['service2_qty'] : 0;
$service3_qty = isset($_POST['service3_qty']) ? $_POST['service3_qty'] : 0;
$service4_qty = isset($_POST['service4_qty']) ? $_POST['service4_qty'] : 0;
$service5_qty = isset($_POST['service5_qty']) ? $_POST['service5_qty'] : 0;

// Service prices
$servicePrices = [
    'Haircut' => 50,
    'Hair Coloring' => 100,
    'Manicure' => 40,
    'Pedicure' => 45,
    'Hair Spa' => 120
];

// Perform calculations using the calculateAmount function from calculate.php
list($amount1, $discount1) = calculateAmount($servicePrices['Haircut'], $service1_qty, true);
list($amount2, $discount2) = calculateAmount($servicePrices['Hair Coloring'], $service2_qty, false);
list($amount3, $discount3) = calculateAmount($servicePrices['Manicure'], $service3_qty, true);
list($amount4, $discount4) = calculateAmount($servicePrices['Pedicure'], $service4_qty, true);
list($amount5, $discount5) = calculateAmount($servicePrices['Hair Spa'], $service5_qty, false);

// Calculate totals
$totalAmount = $amount1 + $amount2 + $amount3 + $amount4 + $amount5;
$totalDiscount = $discount1 + $discount2 + $discount3 + $discount4 + $discount5;
$grandTotal = $totalAmount - $totalDiscount;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Quotation</h1>
    <div class="quotation-info">
        <h2>Customer Information</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($address) ?></p>
        <p><strong>Phone Number:</strong> <?= htmlspecialchars($phone) ?></p>
        
        <h2>Services</h2>
        <table>
            <tr>
                <th>Service</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price per Unit</th>
                <th>Amount</th>
                <th>Discount</th>
            </tr>
            <tr>
                <td>Haircut</td>
                <td>Local</td>
                <td><?= $service1_qty ?></td>
                <td>50</td>
                <td><?= $amount1 ?></td>
                <td><?= $discount1 ?></td>
            </tr>
            <tr>
                <td>Hair Coloring</td>
                <td>Import</td>
                <td><?= $service2_qty ?></td>
                <td>100</td>
                <td><?= $amount2 ?></td>
                <td><?= $discount2 ?></td>
            </tr>
            <tr>
                <td>Manicure</td>
                <td>Local</td>
                <td><?= $service3_qty ?></td>
                <td>40</td>
                <td><?= $amount3 ?></td>
                <td><?= $discount3 ?></td>
            </tr>
            <tr>
                <td>Pedicure</td>
                <td>Local</td>
                <td><?= $service4_qty ?></td>
                <td>45</td>
                <td><?= $amount4 ?></td>
                <td><?= $discount4 ?></td>
            </tr>
            <tr>
                <td>Hair Spa</td>
                <td>Import</td>
                <td><?= $service5_qty ?></td>
                <td>120</td>
                <td><?= $amount5 ?></td>
                <td><?= $discount5 ?></td>
            </tr>
        </table>
        <h3>Total Discount: <?= $totalDiscount ?></h3>
        <h3>Grand Total: <?= $grandTotal ?></h3>
        
        <button onclick="window.print()">Print Quotation</button>
    </div>
</body>
</html>
