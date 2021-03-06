<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scrappy</title>

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>




</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php
    include 'views/components/navbar.php';
    ?>
</nav>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>


<!--------------------------------------------- Start Banner Area ----------------------------------------------------->

<div class="blur" id="blur">

    <header class="banner-area mt-62 ">
        <?php
        include "views/components/index_components/home_banner.php";
        ?>
    </header>
    <!----------------------------------------------- End Banner Area ----------------------------------------------------->


    <!----------------------------------------------- Start Main Area ----------------------------------------------------->

    <main class="main-content">

        <section class="main-header main-features p-3">
            <?php
            include "views/components/index_components/main_header.php";
            ?>
        </section>


        <section class="main-body carousel-best-offer">
            <?php
            include "views/components/index_components/carousel_most_searched.php";
            ?>
        </section>

        <section class="main-body carousel-best-offer">
            <?php
            include "views/components/index_components/carousel_most_rated.php";
            ?>
        </section>

        <section class="consent">
            <?php
            include "views/components/user_components/consent_cookie.php";
            ?>
        </section>

    </main>
</div>
<!------------------------------------------------- End Main Area ----------------------------------------------------->


<!----------------------------------------------- Start Footer Area --------------------------------------------------->
<?php
include "views/components/footer.php";
?>
<!------------------------------------------------ End Footer Area ---------------------------------------------------->

</body>
</html>