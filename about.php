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
        <h2>#knowus</h2>
        <p> Praesent mi nunc, ornare at nibh sit amet </p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="./img/about/a6.jpg" alt="">
        <div>
            <h2>Who we are ?</h2>
            <p>Maecenas accumsan malesuada efficitur. Aliquam blandit ut nisi vel fermentum. Nulla facilisi. In hac habitasse platea dictumst. Suspendisse potenti. Morbi vitae est pretium, varius mauris volutpat, dapibus turpis. Cras lacus eros, egestas
                non mollis sed, auctor id neque. Morbi ut metus ornare, hendrerit justo eu, rhoncus ligula. Etiam facilisis imperdiet accumsan. Nullam ligula quam, bibendum ac interdum tincidunt, aliquet eget augue. Duis vitae libero quam. Nunc congue
                massa consequat turpis commodo, at mollis tellus aliquet. Sed non lectus vel tellus sagittis facilisis. In quis rutrum tortor.</p>
            <abbr title="">
                Sed eget efficitur lorem. In libero lorem, malesuada a est in, consequat aliquam nisi
            </abbr>
            <marquee bgcolor="#ccc" loop="-1" scrollamout="5" width="100%">Nullam congue pretium pulvinar. Nam viverra ante nec sapien lobortis, vel sollicitudin elit placerat. </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="./img/about/1.mp4"></video>
        </div>
    </section>

    <?php
        include 'inc/feature.php';
        include 'inc/newsletter.php';
        include 'inc/footer.php';
        include 'inc/script.php';
    ?>
</body>

</html>