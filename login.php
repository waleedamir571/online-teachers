<?php
session_start();
include 'partials/header.php';

include 'partials/header2.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['forgot_email'];

    // Check if the email exists in your database
    // Generate a unique token and expiration time
    // Send an email to the user with a link to reset their password

    $_SESSION['message'] = "If this email is registered, you will receive a password reset link.";
    header('Location: login.php');
}


?>

<body>

    <section class="container1 rem20">
        <div class="login-container">
            <div class="form-container">
                <h1> Login</h1>

                <?php
                if (isset($_SESSION['error'])) {
                    echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']); // Clear the error after displaying it
                }
                if (isset($_SESSION['message'])) {
                    echo "<p style='color:green;'>" . $_SESSION['message'] . "</p>";
                    unset($_SESSION['message']); // Clear the message after displaying it
                }
                ?>

                <form action="process_login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" id="email" required />

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" required />

                    <p><a href="forgot_password.php" style="cursor: pointer; color: blue;">Forgot Password</p>

                    <button type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>


    <div id="forgotPasswordModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Reset Password</h2>
            <form action="process_reset_password.php" method="post">
                <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>" />
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" required />
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>

</body>

</html>

<script>
    // Get the modal
    var modal = document.getElementById("forgotPasswordModal");

    // Get the button that opens the modal
    var btn = document.getElementById("forgotPasswordBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>