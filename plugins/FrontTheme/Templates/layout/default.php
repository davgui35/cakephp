<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="Site ecommerce de smartphone, tablette, ...">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Ecommerce</title>
    <!-- CSS-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <?= $this->Html->css([
        'linearicons.css',
        'font-awesome.min.css',
        'themify-icons.css',
        'bootstrap.css',
        'owl.carousel.css',
        'nice-select.css',
        'nouislider.min.css',
        'ion.rangeSlider.css',
        'ion.rangeSlider.skinFlat.css',
        'magnific-popup.css',
        'main.css'
    ]); ?>
</head>

<body>
    <?= $this->fetch('content'); ?>

    <?= $this->Element('FrontTheme.layout/menu'); ?>

    <?= $this->fetch('content'); ?>

    <!-- Footer -->
    <?= $this->Element('FrontTheme.layout/footer'); ?>

    <!-- script -->
    <?= $this->Html->script([
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
        'vendor/jquery-2.2.4.min.js',
        'vendor/bootstrap.min.js',
        'jquery.ajaxchimp.min.js',
        'jquery.nice-select.min.js',
        'jquery.sticky.js',
        'nouislider.min.js',
        'countdown.js',
        'jquery.magnific-popup.min.js',
        'owl.carousel.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE',
        'gmaps.min.js',
        'main.js',
    ]); ?>
</body>

</html>