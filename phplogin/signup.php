<?php
require "header.php";
?>

<main class="flex-shrink-0" role="main">
    <div class="container">
        <section class="section-defalt">
            <h1>Signup</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields</p>';
                }
                elseif ($_GET['error'] == "invalidemail") {
                    echo '<p class="signuperror">Invalid email</p>';
                }
                elseif ($_GET['error'] == "invaliduid") {
                    echo '<p class="signuperror">Name already in use</p>';
                }
                elseif ($_GET['error'] == "invalidemail&uid=") {
                    echo '<p class="signuperror">Invalid email</p>';
                }
                elseif ($_GET['error'] == "invalidemail&uid=") {
                    echo '<p class="signuperror">Invalid email</p>';
                }
                elseif ($_GET['error'] == "passwordcheck&uid=") {
                    echo '<p class="signuperror">Passwords don´t match</p>';
                }
            }

            ?>
            <form action="includes/signup.inc.php" method="post">
                <input class="form-control mr-sm2" type="text" name="uid" placeholder="Username">
                <input class="form-control mr-sm2" type="text" name="mail" placeholder="E-mail">
                <input class="form-control mr-sm2" type="password" name="pwd" placeholder="Password">
                <input class="form-control mr-sm2" type="password" name="pwd-repeat" placeholder="Repeat password">
                <button class="btn btn-light my-2 my-sm-0" type="submit" name="signup-submit">Signup</button>
                </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>