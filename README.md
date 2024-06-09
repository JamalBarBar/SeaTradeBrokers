<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ship Marketplace</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Ship Marketplace</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#buy">Buy</a></li>
            <li><a href="#sell">Sell</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section id="home">
        <h2>Welcome to Ship Marketplace</h2>
        <p>Your one-stop platform for buying and selling ships.</p>
    </section>
    <section id="buy">
        <h2>Buy a Ship</h2>
        <div class="ship-list">
            <div class="ship-item">
                <h3>Ship 1</h3>
                <p>Details about Ship 1.</p>
                <button>Contact Seller</button>
            </div>
            <div class="ship-item">
                <h3>Ship 2</h3>
                <p>Details about Ship 2.</p>
                <button>Contact Seller</button>
            </div>
            <!-- Add more ships as needed -->
        </div>
    </section>
    <section id="sell">
        <h2>Sell a Ship</h2>
        <form id="sell-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="ship-name">Ship Name:</label>
            <input type="text" id="ship-name" name="ship-name" required>
            
            <label for="details">Ship Details:</label>
            <textarea id="details" name="details" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: contact@shipmarketplace.com</p>
    </section>
    <footer>
        <p>&copy; 2024 Ship Marketplace. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>