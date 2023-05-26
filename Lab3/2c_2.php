<?php
session_start();
?>

<ul>
    <?php foreach ($_SESSION['array'] as $value): ?>
        <li><?php echo $value; ?></li>
    <?php endforeach; ?>
</ul>
