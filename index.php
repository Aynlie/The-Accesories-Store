<?php
// 1. Visitor name
$user = "Jaymee";

// 2. Greeting
$pagbati = "Hello, " . $user . "!";

// 3. Offer array: item, quantity required, normal price, discounted price
$offer = ["Sunglasses", 3, 100, 60];

// 4. Normal price calculation
$reg_price = $offer[1] * $offer[2];

// 5. Discounted price calculation
$offer_price = $offer[1] * $offer[3];

// 6. Total savings
$saving = $reg_price - $offer_price;
?>

<?php include "includes/header.php"; ?>

<h1><?= $pagbati ?></h1>

<div class="save-circle">
    <p>You save ₱<?= $saving ?>!</p>
</div>

<p>
    Buy <?= $offer[1] ?> packs of <strong><?= $offer[0] ?></strong>!<br>
    Normal Price: ₱<?= $reg_price ?><br>
    Discounted Price: ₱<?= $offer_price ?>
</p>

<?php include "includes/footer.php"; ?>