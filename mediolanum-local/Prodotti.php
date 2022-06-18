<?php /* Template Name: Prodotti */ ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/chi-siamo.css">
    <script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/bootstrap/js/main.js"></script>
    <!-- media query -->
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/media-query.css?ver=<?php echo $_ver; ?>" />
    <!-- font style -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/bootstrap.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>mediolanum</title>
</head>

<body>

    <div class="wrapper" style="width: 1440px;margin:auto;">
        <!-- menu start -->
        <div class="headerSection">
            <div class="headerSectionInner">
                <!-- menu start -->
                <div class="menuSection">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= get_stylesheet_directory_uri() ?>/img/Logo-blue.svg" alt="logo1">
                        </div>
                        <div class="col-md-4 menuMiddle">
                            <ul>
                                <li>
                                    <a href="">Benessere</a>
                                </li>
                                <li>
                                    <a href="">Coaching</a>
                                </li>
                                <li>
                                    <a href="">Partner</a>
                                </li>
                                <li>
                                    <a href="">Tour</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 menuRight">
                            <ul>
                                <li>
                                    <span class="commonBtn">Fai l’Health Test</span>
                                </li>
                                <li class="user">
                                    <img src="<?= get_stylesheet_directory_uri() ?>/img/user-blue.svg" alt="logo">
                                </li>
                                <li class="menu">
                                    <img src="<?= get_stylesheet_directory_uri() ?>/img/menu-blue.svg" alt="logo">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of menu -->
                <!-- hero start -->
                <div class="heroSection container">
                    <div class="heroSectionInner">
                        <div class="row">
                            <div class="col-md-4 leftSection">
                                <div class="p-hero-title">PRODOTTI PROTEZIONE</div>
                                <div class="p-heo-title2">Ti conosciamo, e ti proteggiamo, da sempre</div>
                                <div class="p-hero-description">Da sempre Banca Mediolanum si prende cura non solo dei tuoi risparmi ma si impegna anche a proteggere te e la tua famiglia, il tuo patrimonio e la tua casa. Chiedi al tuo Family Banker che ti conosce da sempre, qual è la soluzione Mediolanum più giusta per te, in ogni momento della tua vita.</div>
                            </div>
                            <div class="col-md-8 rightSection">
                                <img src="<?= get_stylesheet_directory_uri() ?>/img/p-father-and-son1.svg">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of hero -->
            </div>
        </div>
        <!-- BodySection-->
        <div class="bodySection">
            <div class="InnerBody">
                <div class="row1 container">


                </div>
            </div>
        </div>
        <div> <?php get_footer()?></div>
        
        
    </div>
   

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>


</html>