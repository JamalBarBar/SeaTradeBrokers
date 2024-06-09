<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Template</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            padding: 50px 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1 id="companyName"></h1>
        <nav id="navLinks"></nav>
    </header>

    <section id="company-info">
        <h2>About Us</h2>
        <p id="companyDescription">Description of the company...</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul id="serviceList">
            <!-- JavaScript will populate this list -->
        </ul>
    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div id="portfolioItems">
            <!-- JavaScript will populate this section -->
        </div>
    </section>

    <section id="team">
        <h2>Our Team</h2>
        <ul id="teamMembers">
            <!-- JavaScript will populate this list -->
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript code here
        document.getElementById('companyName').textContent = "Your Company Name";
        document.getElementById('companyDescription').textContent = "Description of the company...";

        var navLinks = document.getElementById('navLinks');
        var sections = document.querySelectorAll('section');
        sections.forEach(function(section) {
            var id = section.getAttribute('id');
            var link = document.createElement('a');
            link.setAttribute('href', '#' + id);
            link.textContent = id.charAt(0).toUpperCase() + id.slice(1); // Capitalize first letter
            navLinks.appendChild(link);
        });

        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);
            // You can add AJAX request or any other action here
        });
    </script>
</body>
</html>
