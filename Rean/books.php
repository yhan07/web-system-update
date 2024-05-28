<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWormer Home</title>
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
            flex-direction: column;
            align-items: center;
        }
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .book-item {
            position: relative;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 10px;
            transition: transform 0.3s;
        }
        .book-item:hover {
            transform: scale(1.05);
        }
        .book-item img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .book-item p {
            margin: 10px 0 0;
        }
        .book-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
            border-radius: 10px;
            padding: 10px;
        }
        .book-item:hover .book-info {
            opacity: 1;
        }
        .book-info h3, .book-info p {
            margin: 5px 0;
        }
        .sidebar {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .search-section {
            width: 200px;
            margin-bottom: 20px;
        }
        .search-section select,
        .search-section input,
        .search-section button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .categories {
            margin: 20px 0;
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
<?php
// Establishing the database connection
$servername = "localhost"; // Assuming the database is hosted locally
$username = "root";
$password = "1234";
$dbname = "borrowed_books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling the search request
if(isset($_POST['search'])) {
    // Sanitize user input
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];
   
    
    // Build the SQL query based on user input
    $sql = "SELECT * FROM books WHERE ";
        $conditions = array();
        if($title != '') $conditions[] = "title LIKE '%$title%'";
        if($genre != 'Select Category') $conditions[] = "genre = '$genre'";
        if($author != 'Select Author') $conditions[] = "author = '$author'";
      

        // Combine conditions into a single WHERE clause
        $sql .= implode(' AND ', $conditions);

        // Execute the query
        $result = $conn->query($sql);

}
?>
</head>
<body>
    <div class="header">
        <img src="images/logo.svg" alt="BookWormer Logo">
        <div class="navbar">
        <a href="index.php">Home</a>
    </div>
    </div>
   
    <div class="content">
        <div class="book-grid">
            <div class="book-item">
                <img src="images/book1.jpg" alt="The Great Indian Novel">
                <p>The Great Indian Novel</p>
                <div class="book-info">
                    <h3>The Great Indian Novel</h3>
                    <p>Author: Shashi Tharoor</p>
                    <p>Genre: Historical Fiction</p>
                    <p>Description: A satirical novel that retells the Mahabharata.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book2.jpg" alt="Epic">
                <p>Epic</p>
                <div class="book-info">
                    <h3>Epic</h3>
                    <p>Author: Conor Kostick</p>
                    <p>Genre: Fantasy</p>
                    <p>Description: A novel set in a world where a computer game determines the social status of its players.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book3.jpg" alt="The Lightning Thief">
                <p>The Lightning Thief</p>
                <div class="book-info">
                    <h3>The Lightning Thief</h3>
                    <p>Author: Rick Riordan</p>
                    <p>Genre: Fantasy</p>
                    <p>Description: The first book in the Percy Jackson series.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book4.jpg" alt="The Imposter">
                <p>The Imposter</p>
                <div class="book-info">
                    <h3>The Imposter</h3>
                    <p>Author: Suzanne Woods Fisher</p>
                    <p>Genre: Romance</p>
                    <p>Description: A romance novel set in an Amish community.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book5.jpg" alt="Magic and Mayhem">
                <p>Magic and Mayhem</p>
                <div class="book-info">
                    <h3>Magic and Mayhem</h3>
                    <p>Author: Various</p>
                    <p>Genre: Fantasy</p>
                    <p>Description: A collection of fantasy short stories.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book6.jpg" alt="The Red Tent">
                <p>The Red Tent</p>
                <div class="book-info">
                    <h3>The Red Tent</h3>
                    <p>Author: Anita Diamant</p>
                    <p>Genre: Historical Fiction</p>
                    <p>Description: A novel that gives a voice to Dinah, a minor character from the Bible.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book7.jpg" alt="Fitness & Health">
                <p>Fitness & Health</p>
                <div class="book-info">
                    <h3>Fitness & Health</h3>
                    <p>Author: Various</p>
                    <p>Genre: Health</p>
                    <p>Description: A guide to fitness and health.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book8.jpg" alt="Steve Jobs">
                <p>Steve Jobs</p>
                <div class="book-info">
                    <h3>Steve Jobs</h3>
                    <p>Author: Walter Isaacson</p>
                    <p>Genre: Biography</p>
                    <p>Description: The biography of Steve Jobs.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book9.jpg" alt="Bedtime Stories">
                <p>Bedtime Stories</p>
                <div class="book-info">
                    <h3>Bedtime Stories</h3>
                    <p>Author: Various</p>
                    <p>Genre: Children's</p>
                    <p>Description: A collection of bedtime stories for children.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="images/book10.jpg" alt="Traditional Tales Collections">
                <p>Traditional Tales Collections</p>
                <div class="book-info">
                    <h3>Traditional Tales Collections</h3>
                    <p>Author: Various</p>
                    <p>Genre: Folklore</p>
                    <p>Description: A collection of traditional tales from around the world.</p>
                </div>
            </div>
        </div>
        <div class="sidebar">
        <div class="search-section">
        <h3>Search</h3>
        <form method="POST">
            <select name="genre">
                <option>Select Category</option>
                <option>Fantasy</option>
                <option>Historical Fiction</option>
                <option>Romance</option>
                <option>Action</option>
                <!-- Add more categories here -->
            </select>
            <select name="author">
                <option>Select Author</option>
                <option>Shashi Tharoor</option>
                <option>Conor Kostick</option>
                <option>Rick Riordan</option>
                <option>Dan Brown</option>
                <!-- Add more authors here -->
            </select>
            <select name="language">
                <option>Select Language</option>
                <option>English</option>
                <option>French</option>
                <option>Spanish</option>
                <!-- Add more languages here -->
            </select>
            <input type="text" name="title" placeholder="Title">
            <button type="submit" name="search">Search</button>
        </form>
    </div>

    <?php
    // Display search results if available
    if(isset($result) && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>".$row['title']."</h3>";
            echo "<p>Author: ".$row['author']."</p>";
            echo "<p>Category: ".$row['genre']."</p>";
            echo "</div>";
        }
    } elseif(isset($result)) {
        echo "No results found.";
    }
    ?>
    <div class="footer">
        <div>BookWormer</div>
        <div>
            <a href="#">Facebook</a> | <a href="#">Instagram</a>
        </div>
        <div>Contact Us: bcnp.admin@gmail.com</div>
    </div>
</body>
</html>
