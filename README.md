<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Other meta tags and links can be added here -->
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
        <div class="hero">
            <h2>Welcome to Ship Marketplace</h2>
            <p>Your one-stop platform for buying and selling ships.</p>
        </div>
    </section>
    <section id="buy">
        <h2>Buy a Ship</h2>
        <div class="ship-list">
            <div class="ship-item">
                <img src="ship1.jpg" alt="Ship 1">
                <h3>Ship 1</h3>
                <p>Details about Ship 1.</p>
                <button>Contact Seller</button>
            </div>
            <div class="ship-item">
                <img src="ship2.jpg" alt="Ship 2">
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
        <p>Email: Info@seatradebrokers.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Address: 123 Ship St, Port City, PC 12345</p>
    </section>
    <footer>
        <p>&copy; 2024 Ship Marketplace. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
