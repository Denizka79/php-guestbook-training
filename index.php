<?php include "include/header.php" ?>
<?php 
$name = "";
$email = "";
$body = "";
$bodyErr = "";
$nameErr = "";
$emailErr = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    }

    if (empty($_POST["body"])) {
        $bodyErr = "Body is required";
    } else {
        $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        $sql = "INSERT INTO guestbook (name, email, body) VALUES ('$name', '$email', '$body')";

        if (mysqli_query($conn, $sql)) {
            header('Location: comments.php');
        } else {
            echo "Error" . mysqli_error($conn);
        }
    }
}
?>
    <main class="main">
        <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="name">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" placeholder="Enter your name">
            </div>
            <div class="email">
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" placeholder="Enter your email">
            </div>
            <div class="comment">
                <label for="comment">Comment:</label>
                <br>
                <input class="comment-input" id="body" name="body" type="text">
            </div>
            <div class="submit-button">
                <button id="submit" name="submit" type="submit">Send</button>
                <!-- <input type="submit" name="submit" value="Send"> -->
            </div>
        </form>
    </main>
    <footer class="footer">
        <div class="container">&#169; Denis Meshcheryakov. 2023</div>
    </footer>
</body>
</html>