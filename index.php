<link rel="stylesheet" href="style.css">

<?php
include 'DB.php';
$game = new DB('game')
?>

<?php if (array_key_exists('game-id', $_REQUEST)) { ?>
    <div class="container">
        <?php for ($c = 1; $c <= 3; $c++) : ?>
            <?php for ($r = 1; $r <= 3; $r++) : ?>
                <a href="?c=<?= $c ?>&r=<?= $r ?>">-</a>
            <?php endfor; ?>
        <?php endfor; ?>

    </div>

<?php

} else { ?>
 <a class="btn" href="/tictactoe-php/startgame.php">start game</a>
<?php
}
?>