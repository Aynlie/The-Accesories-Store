<?php
// 1. User name
$user = "Jaymee";

// A variable called $user holds the user's name.

// 2. Basic greeting
$greet = "Hello!";

// The $greet variable is initialized; it stores the message Hello which can be shown to anyone.

// 3. Check if user has a name
if ($user) {
    $greet = "Hello, " . $user . "!";
}

// If the $user variable contains a name (is not empty), the greeting is personalized by appending the user's name to the greeting message.

// 4. Product name
$product = "Sunglasses";

// A variable called $product holds the name of the product being sold.

// 5. Cost per pack
$cost = 10;

// A variable called $cost holds the price of one pack of the product.

// 6. FOR LOOP — up to 15 packs
$totals = [];

for ($i = 1; $i <= 15; $i++) {

    // 7. subtotal: number of packs × cost
    $subtotal = $i * $cost;

    // 8. discount: cost/100 × (i × 4)
    $discount = ($cost / 100) * ($i * 4);

    // 9. final discounted price
    $totals[$i] = $subtotal - $discount;
}

// A for loop iterates from 1 to 15, representing the number of packs being purchased. For each iteration, it calculates the subtotal (number of packs multiplied by the cost per pack), the discount (4% of the subtotal), and then computes the final discounted price by subtracting the discount from the subtotal. The final prices are stored in an associative array $totals, where the keys are the quantities and the values are the corresponding discounted prices.

?>

<?php require "includes/header.php"; ?>

<h1><?= $greet ?></h1>
<h2>Product: <?= $product ?></h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Quantity</th>
        <th>Label</th>
        <th>Discounted Price</th>
    </tr>

    <?php foreach ($totals as $quantity => $price): ?>
        <tr>
            <td><?= $quantity ?></td>

            <td>
                <?= $quantity ?> pack<?= ($quantity == 1) ? "" : "s" ?>
            </td>

            <td>₱<?= number_format($price, 2) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php include "includes/footer.php"; ?>