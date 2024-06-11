<?php
$navLinks = [
    'index' => 'Home',
    'product' => 'Products',
    'pricing' => 'Pricing',
    'team' => 'Team'
];
?>
<header>
    <div class="container">
        <h1>AI API</h1>
        <nav>
            <ul>
                <?php foreach ($navLinks as $link => $title) { ?>
                    <li><a href="<?= $link ?>.php"><?= $title ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>
