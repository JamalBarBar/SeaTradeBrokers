<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Template</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Company Name</h1>
            <nav>
                <a href="#services">Services</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#team">Team</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <section id="company-info">
        <div class="container">
            <h2>About Us</h2>
            <p>Description of the company...</p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
            </ul>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <!-- Your portfolio content here -->
        </div>
    </section>

    <section id="team">
        <div class="container">
            <h2>Our Team</h2>
            <!-- Your team members' information here -->
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contact-form">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Company Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
