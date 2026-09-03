<?php 
$currentDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$baseUrl = $currentDir === '' ? '/' : $currentDir . '/';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescription ?? 'Мой сайт на PHP с подключаемыми шапкой и футером.' ?>">
    <meta name="keywords" content="<?= $pageKeywords ?? 'мой сайт, php проект, личный блог' ?>">
    <base href="<?= $baseUrl ?>">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    
    <title><?= $pageTitle ?? 'MyWebsite' ?></title>
    <link rel="canonical" href="<?= $pageCanonical ?? ('https://' . $_SERVER['HTTP_HOST'] . rtrim($_SERVER['REQUEST_URI'], '/')) ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php 
            // Определяем имя текущего файла для подсветки активного пункта
            $currentPage = basename($_SERVER['PHP_SELF']); 
            ?>
            <a class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>" aria-current="page" href="index.php">Home</a>
            <a class="nav-link <?= ($currentPage === 'about.php') ? 'active' : '' ?>" href="about.php">About</a>
        </div>
        </div>
    </div>
    </nav>
    
    
    <main class="container">