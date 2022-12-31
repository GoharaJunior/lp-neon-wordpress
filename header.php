<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">

    <!-- Primary Meta Tags -->
    <title><?php bloginfo('name') ?> <?php wp_title('|') ?></title>
    <meta name="title" content="Landing Page NEON - Redesign">
    <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://codeboost.com.br/projetos/lp-neon/">
    <meta property="og:title" content="Landing Page NEON - Redesign">
    <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
    <meta property="og:image" content="https://codeboost.com.br/projetos/lp-neon/share-img.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://codeboost.com.br/projetos/lp-neon/">
    <meta property="twitter:title" content="Landing Page NEON - Redesign">
    <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
    <meta property="twitter:image" content="https://codeboost.com.br/projetos/lp-neon/share-img.jpg">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
        <a href="" class="logo" title="Logo NEON"></a>
        <nav>
            <ul>
            <li><a href="">Produtos Neon</a></li>
            <li><a href="">Conta digital PJ</a></li>
            <li><a href="">Quem somos</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Ajuda</a></li>
            </ul>
            <a href="" class="btn-secondary white">Abra sua conta digital</a>
        </nav>
        <button class="btn-mobile">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-mobile.svg" alt="">
        </button>
        </div>
    </header>