<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Ecomere Tutorial </title>
    <?php
        include 'inc/style.php';
    ?>
</head>

<body>
    <?php
        include 'inc/header.php';
    ?>

    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p> LEAVE A MESSAGE, We love to hear from you</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit ine of our agency location or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+84 0851242258</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday - Saturday: 9.00am to 16.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412.0105543499197!2d106.67334342581141!3d10.755506026476983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ef40f3e44db%3A0x9e8b8b3ffe3ec101!2zxJAuIE5ndXnhu4VuIFRyw6NpLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1655979322065!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details" class="section-p1">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="./img/people/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>Phone : +000 123 000 77 88 <br> Email: contact@example.com</p>

            </div>
            <div>
                <img src="./img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br>Phone : +000 123 000 77 88 <br> Email: contact@example.com</p>

            </div>
            <div>
                <img src="./img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br>Phone : +000 123 000 77 88 <br> Email: contact@example.com</p>

            </div>
        </div>
    </section>

    <?php
        include 'inc/newsletter.php';
        include 'inc/footer.php';
        include 'inc/script.php';
    ?>
</body>

</html>