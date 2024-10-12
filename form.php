<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon Quotation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Hair Salon Services</h1>
    <form action="display.php" method="POST">
        <!-- Customer Details -->
        <h2>Customer Details</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <!-- Service Selection -->
        <h2>Select Services</h2>
        
        <!-- Each service as a product-item for better styling -->
        <div class="product-item">
            <img src="img/haircut.jpg" alt="Haircut Image">
            <div>
                <h3>Haircut (Local)</h3>
                <p>Price: RM 50.00</p>
                <label for="service1_qty">Quantity:</label>
                <input type="number" id="service1" name="service1_qty" value="0" min="0">
            </div>
        </div>
        <br>
        
        <div class="product-item">
            <img src="img/haircolor.jpg" alt="Hair Coloring Image">
            <div>
                <h3>Hair Coloring (Import)</h3>
                <p>Price: RM 100.00</p>
                <label for="service2_qty">Quantity:</label>
                <input type="number" id="service2" name="service2_qty" value="0" min="0">
            </div>
        </div>
        <br>
        
        <div class="product-item">
            <img src="img/manicure.jpg" alt="Manicure Image">
            <div>
                <h3>Manicure (Local)</h3>
                <p>Price: RM 40.00</p>
                <label for="service3_qty">Quantity:</label>
                <input type="number" id="service3" name="service3_qty" value="0" min="0">
            </div>
        </div>
        <br>
        
        <div class="product-item">
            <img src="img/pedicure.jpg" alt="Pedicure Image">
            <div>
                <h3>Pedicure (Local)</h3>
                <p>Price: RM 45.00</p>
                <label for="service4_qty">Quantity:</label>
                <input type="number" id="service4" name="service4_qty" value="0" min="0">
            </div>
        </div>
        <br>
        
        <div class="product-item">
            <img src="img/hairspa.jpg" alt="Hair Spa Image">
            <div>
                <h3>Hair Spa (Import)</h3>
                <p>Price: RM 120.00</p>
                <label for="service5_qty">Quantity:</label>
                <input type="number" id="service5" name="service5_qty" value="0" min="0">
            </div>
        </div>
        <br>
        
        <input type="submit" value="Generate Quotation">
    </form>
</body>
</html>
