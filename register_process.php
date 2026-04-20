<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ink & Thoughts | Book Paradise</title>

<style>

/* GOOGLE FONT STYLE */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;

    /*  MODERN BACKGROUND */
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('backgroundpic2.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* HEADER */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(10px);
}

/* LOGO */
.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 50px;
    margin-right: 10px;
}

.logo h2 {
    color: white;
    letter-spacing: 1px;
}

/* NAV */
nav {
    display: flex;
    align-items: center;
}

nav a {
    color: white;
    margin: 0 12px;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

nav a:hover {
    color: orange;
}

/* BUTTONS */
.auth-buttons a {
    padding: 8px 14px;
    border-radius: 6px;
    margin-left: 10px;
    font-weight: bold;
}

.login-btn {
    border: 1px solid orange;
    color: orange;
}

.login-btn:hover {
    background: orange;
    color: white;
}

.register-btn {
    background: orange;
    color: white;
    box-shadow: 0 0 10px orange;
}

.register-btn:hover {
    background: #ff9800;
}

/* HERO */
.hero {
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
}

.hero h1 {
    font-size: 42px;
    margin-bottom: 10px;
}

.hero p {
    font-size: 18px;
    opacity: 0.9;
}

/* SEARCH */
.search-box {
    text-align: center;
    margin: 20px;
}

.search-box input {
    width: 320px;
    padding: 10px;
    border-radius: 25px;
    border: none;
    outline: none;
}

/* BOOKS */
.books {
    padding: 40px;
    text-align: center;
    color: white;
}

.book-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}

.book {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(8px);
    padding: 15px;
    border-radius: 12px;
    transition: 0.3s;
}

.book:hover {
    transform: translateY(-8px);
}

.book img {
    width: 100%;
    height: 250px;
    border-radius: 10px;
}

button {
    margin-top: 8px;
    padding: 8px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:first-of-type {
    background: orange;
    color: white;
}

button:last-of-type {
    background: #444;
    color: white;
}

/* ABOUT */
.about {
    background: rgba(255,255,255,0.1);
    color: white;
    padding: 30px;
    margin: 20px;
    border-radius: 12px;
    text-align: center;
}

/* FOOTER */
footer {
    background: black;
    color: white;
    text-align: center;
    padding: 15px;
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
        <a href="#about">About</a>
        <a href="#">Cart</a>
        <a href="#">Contact</a>

        <div class="auth-buttons">
            <a href="login.php" class="login-btn">Login</a>
            <a href="register_process.php" class="register-btn">Register</a>
        </div>
    </nav>
</header>

<!-- HERO -->
<div class="hero">
    <h1>Welcome to Ink & Thoughts </h1>
    <p>Your world of stories, knowledge & imagination</p>
</div>

<!-- SEARCH -->
<div class="search-box">
    <input type="text" placeholder="Search your favorite books...">
</div>

<!-- BOOKS -->
<div class="books">
    <h2> Featured Books</h2>

    <div class="book-list">
        <div class="book">
            <img src="book1.jpg">
            <h3>Book 1</h3>
            <p>Rs.299</p>
            <button>Buy Now</button>
            <button>Add to Cart</button>
        </div>

        <div class="book">
            <img src="book2.jpg">
            <h3>Book 2</h3>
            <p>Rs.399</p>
            <button>Buy Now</button>
            <button>Add to Cart</button>
        </div>

        <div class="book">
            <img src="book3.jpg">
            <h3>Book 3</h3>
            <p>Rs.199</p>
            <button>Buy Now</button>
            <button>Add to Cart</button>
        </div>

        <div class="book">
            <img src="book4.jpg">
            <h3>Book 4</h3>
            <p>Rs.499</p>
            <button>Buy Now</button>
            <button>Add to Cart</button>
        </div>
    </div>
</div>

<!-- ABOUT -->
<div class="about" id="about">
    <h2>About Us</h2>
    <p>We bring you the best collection of books at unbeatable prices. Read more, grow more </p>
</div>

<!-- FOOTER -->
<footer>
     2026 Ink & Thoughts | Designed by Rohit Jaanna
</footer>

</body>
</html>