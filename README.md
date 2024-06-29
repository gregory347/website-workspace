<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('image/stock.jpg');
            background-size: cover;
            background-position: right;
            background-repeat: no-repeat;
            color: white;
        }

        header, nav, main {
            padding: 20px;
            background-color: #0a0101ea;
            color: #80f40b;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 9px;
            padding: 4px;
        }

        .main-word {
            text-align: center;
        }

        span {
            font-size: 25px;
        }

        label {
            margin-left: 10px;
        }

        input {
            margin-right: 10px;
            width: 100px;
            height: 20px;
        }

        #your-color {
            color: black;
            font-size: 20px;
        }

        .special {
            text-align: center;
        }

        .form-container {
    text-align: center;
    margin-top: 50px;
}

form {
    display: inline-block;
    text-align: left;
}


        button {
            border: none;
            background-color: rgb(3, 3, 41);
            color: white;
            width: 228px;
            height: 25px;
        }

        #middle {
            text-align: center;
            margin-top: 15px;
        }

        .icons {
            text-align: center;
            border: 2px solid rgb(220, 220, 220);
            line-height: 21px;
            margin: 20px;
        }

        i {
            margin: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header>

    <marquee direction="right">WELCOME TO RESCUE ROADSIDE ASSISTANCE
        <p>We're here to help you with any roadside assistance needs you may have in Kenya. Our network of reliable and skilled mechanics is standing by to assist you</marquee>
    <h1>RESCUE ROADSIDE ASSISTANCE</h1>
</header>
<nav>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>
</nav>
<main>
    <section>
        <h2>About Us</h2>
        <p>Welcome to our website! We provide top-notch services to our clients all over the world.</p>
    </section>
    <section>
        <h2>Services</h2>
        <ul>
            <li>mechanics email adress,</li>
            <li>mechanics phone number</li>
            <li>accident emergency services</li>
            <li>car accident towing services</li>

        </ul>
    </section>
</main>
<footer>
    <p>&copy; 2024 All rights reserved.</p>
</footer>
<form action="send/php/" method="post" title="LOGIN-page">
    <div class="main-word">
        <span>login</span>
        <p>DONT HAVE AN ACCOUNT?<span id="your-color"><b>  CREATE ACCOUNT AND SIGN UP<b></span> </p>
    </div>
    <div>
        <label for="email">Email</label><br>
        <input type="text" id="email" required>
    </div><br>
    <div>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" id="show-password-checkbox">
        <label for="show-password-checkbox">Show Password</label>
    </div><br>
    <div>
        <label for="location">Location</label><br>
        <input type="text" id="location" name="location">
    </div><br>
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('show-password-checkbox');
    
        showPasswordCheckbox.addEventListener('change', function() {
            if (showPasswordCheckbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>        
    <div class="special">
        <button type="submit" value="Login" title="login-page">Login</button>
        <div id="middle">--------------- OR  ---------------</div>
    </div>
    <div class="icons">
        <p><i class="fab fa-brands fa-google fa-lg" style="color: blueviolet;"></i>Sign in with Google</p>
        <p><i class="fab fa-brands fa-facebook fa-lg" style="color: blue;"></i>Sign in with Facebook</p>
        <p><i class="fab fa-brands fa-linkedin-in fa-lg" style="color: chartreuse;"></i>Sign in with Linkedin</p>
    </div>
</form>
