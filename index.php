
<?php
$shopName = "Expresso";
$tagline = "Your daily dose of happiness in every cup.";
$welcome = "Freshly brewed coffee, made just for you.";
?>

<?php include 'header.php'; ?>

<section class="hero">
    <h1>Welcome to <?php echo $shopName; ?></h1>
    <p><?php echo $welcome; ?></p>
    <p><?php echo $tagline; ?></p>

    <a href="menu.php" class="btn">View Our Menu</a>
</section>

<?php include 'footer.php'; ?>
