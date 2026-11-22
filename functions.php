<?php
declare(strict_types=1);

$coffees = [
    "Espresso" => ["price" => 90.00, "stock" => 15],
    "Iced Creamy Latte" => ["price" => 150.00, "stock" => 8],
    "Strawberry Latte" => ["price" => 180.00, "stock" => 5],
    "Mocha" => ["price" => 150.00, "stock" => 12],
    "Affogato" => ["price" => 180.00, "stock" => 4],
    "Iced Pumpkin Latte" => ["price" => 200.00, "stock" => 20]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}
?>

<?php include 'header.php'; ?>

<main>
    <h1>Stock Monitoring</h1>
    <p class="subtitle">Current inventory levels, reorder status, and tax estimates.</p>

    <table class="stock-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-order</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coffees as $product_name => $data): ?>
                <tr>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $data["stock"]; ?></td>
                    <td><?php echo get_reorder_message($data["stock"]); ?></td>
                    <td>Php<?php echo number_format(get_total_value($data["price"], $data["stock"]), 2); ?></td>
                    <td>Php<?php echo number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include 'footer.php'; ?>
