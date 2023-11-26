<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - primary meta tags
  -->
    <title>Annie - Web Developer Based on Los Angeles</title>
    <meta name="title" content="Annie - Web Developer Based on Los Angeles">
    <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/require.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/pages/project.css">
    <link rel="stylesheet" href="./assets/css/pages/contact.css">
    <link rel="stylesheet" href="./assets/css/pages/about.css">


    <!--
    - preload images
  -->
    <link rel="preload" href="./assets/images/hero-banner.png">

</head>

<body>

    <!--
    - #PRELOADER
  -->

    <div class="preloader" data-preloader>
        <div class="preloader-circle"></div>
    </div>





    <!--
    - #HEADER
  -->

    @include('components.header')




    @yield('content')





    <!--
    - #FOOTER
  -->
    @include('components.footer')





    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
