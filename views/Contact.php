<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/contact-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>

</head>
<body>



<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "components/navbar.php"; ?>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<!--------------------------------------------- Start Banner Area ----------------------------------------------------->

<div class="blur" id="blur">

<header class="contact-banner mt-100">
    <h1>Here is the header</h1>
</header>

<!----------------------------------------------- End Banner Area ----------------------------------------------------->

<?php
print_r($_COOKIE);
?>
<!----------------------------------------------- Start Main Area ----------------------------------------------------->

<main class="content">
    <section class="contact-us">
        <div class="container">
            <div class="contact-wrap">
                <form class="contact-form w-100 d-flex flex-wrap justify-content-between pb-5"
<!--                      action="emailTemplate.php" id="formID" method="post">-->
                    <h1 class="contact-form-title w-100 d-flex justify-content-start pb-5">Contact Us</h1>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input position-relative w-50">
                            <span class="label-input">Name</span>
                            <input class="input form_data" type="text" name="name" id="formName"
                                   placeholder="Enter your name">
                            <span id="name_error" class="message-error"></span>
                        </div>
                        <div class="contact-input w-50">
                            <span class="label-input">E-mail</span>
                            <input class="input form_data" type="email" name="email" id="formEmail"
                                   placeholder="Enter your e-mail">
                            <span id="email_error" class="message-error"></span>
                        </div>
                        <div class="contact-input w-50 m-auto">
                            <span class="label-input">Subject</span>
                            <input class="input form_data" type="text" name="subject" id="formSubject"
                                   placeholder="Subject">
                            <span id="subject_error" class="message-error"></span>
                        </div>
                    </div>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input d-flex flex-column w-100 mt-40 ">
                            <span class="label-input">Message</span>
                            <textarea class="textarea-input form_data" name="message" id="formMessage"
                                      placeholder="Your message here..."></textarea>
                        </div>
                    </div>
                    <span id="message_error" class="message-error"></span>
                    <span id="sucMessage"></span>
                    <div class="contact-form-button w-100 d-flex flex-wrap mt-40">
                        <button class="btn-primary" id="submitButton" type="submit" name="submit"
                                onclick="save_contact(); return false;">
                            <span>
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="contact-map">
        <div class="map-location">
            <iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2763.0142178006136!2d21.317151315851984!3d46.17037269406537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474599016319a9b3%3A0xc7f128d36aedf597!2sStrada%20Nicolae%20B%C4%83lcescu%2022%2C%20Arad!5e0!3m2!1sen!2sro!4v1654098908600!5m2!1sen!2sro" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>



</div>

<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<!--<script>   //ex 1-->
<!--    function submitPopUp() {-->
<!--        let name = document.getElementById("formName").value;-->
<!--        let email = document.getElementById("formEmail").value;-->
<!--        let message = document.getElementById("formMessage").value;-->
<!--        const x = [name,email,message];-->
<!--        if (x != null) {-->
<!--            alert(x);-->
<!--        }-->
<!--    }-->
<!--</script>-->
<!--<script> //ex 2-->
<!--    document.addEventListener('mouseleave' , () => console.log('Mouse left window'));-->
<!--    document.addEventListener('mouseenter' , () => console.log('Mouse entered window'));-->
<!--</script>-->
<!---->
<!--<script> //ex 3-->
<!---->
<!--    window.addEventListener('scroll',scrollEffect);-->
<!---->
<!--    let winHeight = window.innerHeight/2;-->
<!---->
<!--    function scrollEffect() {-->
<!--        if (window.scrollY > winHeight) {-->
<!--            alert('You scrolled more than 50% height');-->
<!--                return;-->
<!--       }-->
<!--    }-->
<!---->
<!---->
<!---->
<!--</script>-->


<script src="/assets/js/contactForm.js"></script>

</body>
</html>