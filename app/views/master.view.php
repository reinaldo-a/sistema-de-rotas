<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/asset/css/styles.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="coontainer">
        <header>
            <!-- Header de menu incial -->
                <?php require "partials/header.php"; ?>
        </header>
        <main>
            <?php if(isset($_SESSION['flash']['msg'])): ?>
                <?= getMessage('msg'); ?>
            <?php endif; ?>
            <?php 
                require $view;
            ?>
        </main>
    </div>
    <script src="asset/js/scripts.js" defer></script>
</body>
</html>