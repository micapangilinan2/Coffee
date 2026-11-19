
<?php
$menu = [
    ["name" => "Espresso", "description" => "Strong and rich concentrated coffee.", "price" => 90],
    ["name" => "Iced Creamy Latte", "description" => "Smooth espresso mixed with creamy milk and ice.", "price" => 150],
    ["name" => "Strawberry Latte", "description" => "Creamy milk combined with sweet strawberry flavor.", "price" => 180],
    ["name" => "Mocha", "description" => "Coffee blended with rich chocolate.", "price" => 150],
    ["name" => "Affogato", "description" => "Vanilla ice cream topped with a shot of espresso.", "price" => 180],
    ["name" => "Iced Pumpkin Latte", "description" => "Iced espresso mixed with milk and pumpkin spice flavor.", "price" => 200]
];
?>

<?php include 'header.php'; ?>

<main>
    <h1> Coffee Menu</h1>
    <p class="subtitle">Order the coffee of your taste.</p>

    <div class="menu">

        <?php foreach ($menu as $coffee): ?>

            <div class="coffee">
                <h2><?php echo $coffee["name"]; ?></h2>
                <p><?php echo $coffee["description"]; ?></p>
                <span>Php<?php echo number_format($coffee["price"], 2); ?></span>
            </div>

        <?php endforeach; ?>

    </div>
</main>

<?php include 'footer.php'; ?>
