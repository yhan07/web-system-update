<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            background-color: #d2a478;
            color: #ffffff;
            padding: 20px;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            height: 50px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .navbar {
            background-color: #d2a478;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
        }
        .profile-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 300px;
            text-align: center;
            margin: 10px;
        }
        .profile-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-card h2 {
            margin: 10px 0;
        }
        .profile-card p {
            margin: 10px 0;
            color: #555;
        }
        .profile-card .info {
            text-align: left;
            margin-top: 20px;
        }
        .profile-card .info h3 {
            margin: 10px 0 5px;
        }
        .profile-card .info p {
            margin: 0 0 10px;
        }
        .footer {
            background-color: #1a3c40;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: auto; /* Ensure footer stays at the bottom */
        }
        .footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="images/logo.svg" alt="BookWormer Logo">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="login.php">Logout</a>
        </div>
    </div>
    <div class="content">
        <div class="profile-card">
            <img src="images/profile.jpg" alt="User Profile Picture">
            <h2>Yhan</h2>
            <p>yhan@gmail.com</p>
            <div class="info">
                <h3>Borrowed Books:</h3>
                <p>The Great Indian Novel</p>
                <p>Epic</p>
                <p>The Lightning Thief</p>
                <!-- Add more borrowed books here -->
            </div>
            <div class="info">
                <h3>Favorite Genres:</h3>
                <p>Fantasy</p>
                <p>Historical Fiction</p>
                <!-- Add more favorite genres here -->
            </div>
        </div>
        <div class="profile-card">
            <img src="images/profile2.jpg" alt="User Profile Picture">
            <h2>Koichi</h2>
            <p>koi@example.com</p>
            <div class="info">
                <h3>Borrowed Books:</h3>
                <p>The Red Tent</p>
                <p>Steve Jobs</p>
                <p>Bedtime Stories</p>
                <!-- Add more borrowed books here -->
            </div>
            <div class="info">
                <h3>Favorite Genres:</h3>
                <p>Biography</p>
                <p>Children's</p>
                <!-- Add more favorite genres here -->
            </div>
        </div>
        <div class="profile-card">
            <img src="images/profile3.png" alt="User Profile Picture">
            <h2>Idelle</h2>
            <p>idel@example.com</p>
            <div class="info">
                <h3>Borrowed Books:</h3>
                <p>Fitness & Health</p>
                <p>Traditional Tales Collections</p>
                <p>The Imposter</p>
                <!-- Add more borrowed books here -->
            </div>
            <div class="info">
                <h3>Favorite Genres:</h3>
                <p>Health</p>
                <p>Folklore</p>
                <!-- Add more favorite genres here -->
            </div>
        </div>
        <div class="profile-card">
            <img src="images/profile4.jpeg" alt="User Profile Picture">
            <h2>Kairi</h2>
            <p>kairi@example.com</p>
            <div class="info">
                <h3>Borrowed Books:</h3>
                <p>The Great Indian Novel</p>
                <p>Epic</p>
                <p>The Lightning Thief</p>
                <!-- Add more borrowed books here -->
            </div>
            <div class="info">
                <h3>Favorite Genres:</h3>
                <p>Fantasy</p>
                <p>Historical Fiction</p>
                <!-- Add more favorite genres here -->
            </div>
        </div>
    </div>
    <div class="footer">
        <div>BookWormer</div>
        <div>
            <a href="#">Facebook</a> | <a href="#">Instagram</a>
        </div>
        <div>Contact Us: bcnp.admin@gmail.com</div>
    </div>
</body>
</html>
