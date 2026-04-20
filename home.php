<?php
// DATABASE CONNECTION
$host = "localhost";
$username = "root";
$password = "";
$database = "online_book_store";
$port = 3308;

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SEARCH LOGIC
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM books WHERE book_name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM books";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ink & Thoughts - Online Book Store</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: url('backgroundpic2.jpg') no-repeat center center fixed;
    background-size: cover;
}

header {
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 50px;
    margin-right: 10px;
}

nav {
    display: flex;
    align-items: center;
}

nav a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
}

nav a:hover {
    color: orange;
}

.auth-buttons a {
    padding: 8px 12px;
    margin-left: 8px;
    border-radius: 5px;
    text-decoration: none;
}

.login-btn {
    border: 1px solid orange;
    color: orange;
}

.register-btn {
    background: orange;
    color: white;
}

/* SEARCH */
.search-box {
    text-align: center;
    margin: 15px;
}

.search-box input {
    width: 300px;
    padding: 8px;
}

/* BOOKS */
.books {
    padding: 30px;
    text-align: center;
}

.book-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.book {
    background: rgba(255,255,255,0.85);
    padding: 15px;
    border-radius: 10px;
}

.book img {
    width: 100%;
    height: 250px;
}

button {
    margin-top: 5px;
    background: red;
    color: white;
    padding: 8px;
    border: none;
    border-radius: 5px;
}
</style>
</head>

<body>

<!-- HEADER -->
<header>
    <div class="logo">
        <img src="storelogo.png">
        <h2>Ink & Thoughts</h2>
    </div>

    <nav>
        <a href="#">Home</a>
        <a href="#about">About Us</a>
        <a href="#">View Cart</a>
        <a href="#">Contact</a>

        <div class="auth-buttons">
            <a href="login.php" class="login-btn">Login</a>
            <a href="register_process.php" class="register-btn">Register</a>
        </div>
    </nav>
</header>

<!--  SEARCH (WORKING NOW) -->
<div class="search-box">
    <form method="GET">
        <input type="text" name="search" placeholder="Search books..." value="<?php echo $search; ?>">
        <button type="submit">Search</button>
    </form>
</div>

<!--  BOOKS FROM DATABASE -->
<div class="books">
    <h2>Featured Books</h2>

    <div class="book-list">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="book">
            <img src="<?php echo $row['image']; ?>">
            <h3><?php echo $row['book_name']; ?></h3>
            <p>Rs. <?php echo $row['price']; ?></p>
            <button>Buy Now</button>
            <button>Add to Cart</button>
        </div>

        <?php
            }
        } else {
            echo "<h3 style='color:white;'>No books found</h3>";
        }
        ?>

    </div>
</div>

<!-- ABOUT -->
<div class="about" id="about" style="background:white;padding:20px;margin:20px;border-radius:10px;">
    <h2>About Us</h2>
    <p>Ink & Thoughts provides a wide range of books at affordable prices.</p>
</div>

<!-- FOOTER -->
<footer style="background:black;color:white;text-align:center;padding:10px;">
     2026 Ink & Thoughts | All Rights Reserved
</footer>

</body>
</html>

<?php mysqli_close($conn); ?>