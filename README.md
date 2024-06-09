<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin-top: 50px;
        }
        p {
            margin-bottom: 50px;
        }
        a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #333;
            border-radius: 5px;
            margin: 10px;
        }
        a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Company</h1>
        <p>About our company...</p>
    </header>

    <section id="vessels">
        <h2>Vessels for Sale</h2>
        <ul>
            <li>Vessel 1</li>
            <li>Vessel 2</li>
            <li>Vessel 3</li>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <a href="#vessels">Vessels for Sale</a>
        <a href="#contact">Contact Us</a>
    </footer>

    <style>
        body {
            background-image: url('wallpaper1.jpg');
            background-size: cover;
            color: white;
        }
        #vessels {
            background-image: url('wallpaper2.jpg');
            background-size: cover;
            padding: 100px 0;
        }
        #contact {
            background-image: url('wallpaper3.jpg');
            background-size: cover;
            padding: 100px 0;
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #222;
            padding: 10px 0;
            z-index: 1000;
        }
    </style>
</body>
</html>
