<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Info</title>
    <style>
        body {
            background-image: url('wallpaper1.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to Our Company</h1>
    <p>About our company...</p>
    <nav>
        <a href="vessels.html">Vessels for Sale</a> | 
        <a href="contact.html">Contact Us</a>
    </nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vessels for Sale</title>
    <style>
        body {
            background-image: url('wallpaper2.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Vessels for Sale</h1>
    <ul>
        <li>Vessel 1</li>
        <li>Vessel 2</li>
        <li>Vessel 3</li>
    </ul>
    <nav>
        <a href="index.html">Home</a> | 
        <a href="contact.html">Contact Us</a>
    </nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background-image: url('wallpaper3.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        form {
            display: inline-block;
            text-align: left;
        }
        label, input, textarea {
            display: block;
            margin: 10px 0;
        }
        input, textarea {
            width: 100%;
        }
        input[type="submit"] {
            width: auto;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50"></textarea>
        <input type="submit" value="Submit">
    </form>
    <nav>
        <a href="index.html">Home</a> | 
        <a href="vessels.html">Vessels for Sale</a>
    </nav>
</body>
</html>
