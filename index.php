<?php include "include/header.php" ?>
    <main class="main">
        <div class="container">
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
                <input class="comment-input" id="comment" name="comment" type="text">
            </div>
            <div class="submit-button">
                <button id="submit" name="submit" type="submit">Send</button>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">&#169; Denis Meshcheryakov. 2023</div>
    </footer>
</body>
</html>