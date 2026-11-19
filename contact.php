
<?php
$shopName = "Expresso";

$contactInfo = [
    "email" => "expresso@gmail.com",
    "phone" => "0916-668-6789",
    "address" => "Angeles City, Philippines"
];
?>

<?php include 'header.php'; ?>

<main class="contact">
    <h1>Contact Us</h1>
    <p>We would love to hear your reviews and recommendations!</p>

    <div class="contact-card">

        <h3>Email</h3>
        <p><?php echo $contactInfo["email"]; ?></p>

        <h3>Phone</h3>
        <p><?php echo $contactInfo["phone"]; ?></p>

        <h3>Address</h3>
        <p><?php echo $contactInfo["address"]; ?></p>

    </div>
</main>

<?php include 'footer.php'; ?>
