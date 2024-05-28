<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - BookWormer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
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
            background-color: #1a3c40;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #d2a478;
            color: black;
        }
        .content {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .team {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .team-member {
            width: 30%;
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .team-member img {
            border-radius: 50%;
            height: 150px;
            width: 150px;
        }
        .team-member h2 {
            margin-top: 10px;
            font-size: 22px;
        }
        .team-member p {
            margin-top: 10px;
            color: #555;
        }
        .footer {
            background-color: #1a3c40;
            color: white;
            padding: 10px;
            text-align: center;
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
        <h1>About Us</h1>
    </div>
    <div class="navbar">
        <a href="index.html">Home</a>
    </div>
    <div class="content">
        <h1>Meet Our Team</h1>
        <div class="team">
            <div class="team-member">
                <img src="images/member1.jpg" alt="Member 1">
                <h2>Member 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo non magna tincidunt, vitae feugiat erat pharetra.</p>
            </div>
            <div class="team-member">
                <img src="images/member2.jpg" alt="Member 2">
                <h2>Member 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo non magna tincidunt, vitae feugiat erat pharetra.</p>
            </div>
            <div class="team-member">
                <img src="images/member3.jpg" alt="Member 3">
                <h2>Member 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo non magna tincidunt, vitae feugiat erat pharetra.</p>
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
