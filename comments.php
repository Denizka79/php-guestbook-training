<?php include "include/header.php" ?>
<?php
$sql = "SELECT * FROM guestbook";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <main class="main">
        <div class="container">
            <div class="user-feedback">
                <?php if (empty($feedback)) :  ?>
                <p>There are no comments!</p>
                <?php endif; ?>
                <?php foreach($feedback as $item) : ?>
                <div class="feedback-name"><span>Name: </span><?php echo $item["name"]; ?></div>
                <div class="feedback-email"><span>Email: </span><?php echo $item["email"]; ?></div>
                <div class="feedback-comment"><span>Comment: </span><?php echo $item["body"]; ?></div>
                <div class="feedback-date"><span>Date: </span><?php echo $item["date"]; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">&#169; Denis Meshcheryakov. 2023</div>
    </footer>
</body>
</html>