<?php
session_start();

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

$message = "";

// LOGIN PROCESS
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["user_name"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM customer WHERE username='$user'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // VERIFY PASSWORD
        if (password_verify($pass, $row['password'])) {
            $_SESSION["username"] = $row["username"];
            header("Location: home.php"); // redirect after login
            exit();
        } else {
            $message = " Incorrect Password";
        }
    } else {
        $message = " User not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Ink & Thoughts</title>

<style>

/* BACKGROUND */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;

    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('backgroundpic2.jpg') no-repeat center center fixed;
    background-size: cover;

    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* LOGIN BOX */
.container {
    width: 340px;
    padding: 30px;
    border-radius: 15px;

    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(12px);
    box-shadow: 0 0 20px rgba(0,0,0,0.5);

    color: white;
    text-align: center;
}

/* TITLE */
.container h2 {
    margin-bottom: 20px;
}

/* INPUT */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 25px;
    border: none;
    outline: none;
}

/* BUTTON */
button {
    width: 100%;
    padding: 10px;
    border-radius: 25px;
    border: none;
    background: orange;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #ff9800;
}

/* MESSAGE */
.msg {
    margin-bottom: 10px;
    color: #ff6b6b;
}

/* LINK */
a {
    color: orange;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
</head>

<body>

<div class="container">

    <h2>Login</h2>

    <div class="msg">
        <?php echo $message; ?>
    </div>

    <form method="POST">

        <input type="text" name="user_name" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>

    </form>

    <p>Don't have an account? <a href="register_process.php">Register</a></p>

</div>

</body>
</html>

<?php
mysqli_close($conn);
?>