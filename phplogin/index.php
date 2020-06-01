<?php
require "header.php";
?>

<main class="flex-shrink-0" role="main">
    <div class="container">
        <section class="section-defalt">
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p>Você está conectado</p>';
        }
        else {
            echo '<p>Você não está conectado</p>';
        }
    ?>
        </section>

    </div>
</main>

<?php
require "footer.php";
?>