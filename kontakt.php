<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sylwia Durka | Kancelaria Radcy Prawnego</title>

    <!-- head -->
    <?php include __DIR__ . '/elements/head.php' ?>
</head>

<body>



    <header class="header header-small section-margin" id="header">
        <div class="header-bg sub-header h-contact">
            <!-- nav -->
            <?php include __DIR__ . '/elements/nav.php' ?>


            <div class="title">
                <h1 class="title-main">Kontakt</h1>
                <p class="site-map title-inner"><a href="">Home</a> / <a href="#">Kontakt</a></p>
            </div>

        </div>
    </header>

    <section class="aboutMain section-margin" id="aboutMain">

        <div class="row aboutMain-inner">
            <div class="col-12 col-lg-6">
                <h2 class="title-main">Kontakt</h2>
                <div class="contact-item">
                    <img src="build/images/icons/radca-prawny-ikona-adres.svg" alt="" class="contact-icon">
                    <h4 class="title-inner">Adresy biur</h4>
                    <p>
                        ul. Pusta 5/9 lok. 26, 08-110 Siedlce
                        <br>
                        ul. Rakowiecka 41/17, 02-521 Warszawa
                    </p>
                </div>
                <div class="contact-item">
                    <img src="build/images/icons/radca-prawny-ikona-tel.svg" alt="" class="contact-icon">
                    <h4 class="title-inner">Telefon</h4>
                    <a href="tel:+48509369073">+48 509 369 073</a>
                </div>
                <div class="contact-item">
                    <img src="build/images/icons/radca-prawny-ikona-mail.svg" alt="" class="contact-icon">
                    <h4 class="title-inner">E-mail</h4>
                    <a href="mailto:kancelaria@sylwiadurka.pl">kancelaria@sylwiadurka.pl</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
              <h3 class="">Formularz kontaktowy</h3>
                <div class="contact-main">
                    
                    <form class="contact-form" id="pingForm" novalidate="novalidate">
                        <div class="form-group control-group">

                            <input class="form-control" type="email" placeholder="Twój e-mail * " id="email" name="email">

                        </div>
                        <div class="form-group control-group">
                            <div class="">
                                <input class="form-control" type="number" placeholder="Numer telefonu *" id="mobile" name="mobile">
                            </div>
                        </div>
                        <div class="">
                            <textarea placeholder="Treść wiadomości *" name="message" class="form-control" id="message" rows="5"></textarea>
                        </div>
                        <div class="form-group privacy">
                            <input id="c2 privacy-policy" type="checkbox" required="" value="zgoda została wyrażona" name="pp">
                            <label for="privacy-policy">
                                <p>* Informacja o przetwarzaniu danych osobowych. Administratorem Państwa danych osobowych jest </p>
                            </label>
                        </div>
                        <button type="submit" class="btn button send-btn" id="sendMessageButton">Wyślij</button>
                        <div id="no-config" class="no-config"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container-fluid">
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2447.062834702272!2d22.277846951837166!3d52.1695510155873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471f5a5285ccebdf%3A0x9198197aa5ca836f!2sPusta%205%2C%2008-110%20Siedlce!5e0!3m2!1spl!2spl!4v1594149810420!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>


    <section class="contactMe section-margin" id="contactMe">
        <h3 class="title-top">szybki kontakt</h3>
        <h2 class="title-main">Masz nagły problem? Skontaktuj się ze mną telefonicznie!</h2>
        <a href="tel:509369073" class="button">509 369 073</a>
    </section>





    <!-- Footer -->
    <?php include __DIR__ . '/elements/footer.php' ?>

    <!-- Scripts -->
    <?php include __DIR__ . '/elements/scripts.php' ?>

</body>

</html>
