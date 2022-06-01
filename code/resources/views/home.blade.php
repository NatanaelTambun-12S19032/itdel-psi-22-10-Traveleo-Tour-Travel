<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/nwitee.css" />
    <title>Traveleo Tour & Travel</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 10px;
        font-family: "Montserrat", sans-serif;
        scroll-behavior: smooth;
    }

    a {
        text-decoration: none;
    }

    .container {

        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    p {
        color: black;
        font-size: 1.4rem;
        margin-top: 5px;
        line-height: 2.5rem;
        font-weight: 300;
        letter-spacing: 0.05rem;
    }

    .section-title {
        font-size: 4rem;
        font-weight: 300;
        color: black;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
        text-align: center;
    }

    .section-title span {
        color: #2c7da0;
    }

    .cta {
        display: inline-block;
        padding: 10px 30px;
        color: white;
        background-color: transparent;
        border: 2px solid #2c7da0;
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        margin-top: 30px;
        margin-right: 30px;
        transition: 0.3s ease;
        transition-property: background-color, color;
    }

    .cta:hover {
        color: white;
        background-color: #2c7da0;
    }

    .brand h1 {
        font-size: 3rem;
        text-transform: uppercase;
        color: white;
    }

    /* Header section */
    #header {
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100vw;
        height: auto;
    }

    #header .header {
        min-height: 8vh;
        background-color: rgba(31, 30, 30, 0.24);
        transition: 0.3s ease background-color;
    }

    #header .nav-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 100%;
        max-width: 1300px;
        padding: 0 10px;
    }

    #header .nav-list ul {
        list-style: none;
        position: absolute;
        background-color: rgb(31, 30, 30);
        width: 100vw;
        height: 100vh;
        left: 100%;
        top: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 1;
        overflow-x: hidden;
        transition: 0.5s ease left;
    }

    #header .nav-list ul.active {
        left: 0%;
    }

    #header .nav-list ul a {
        font-size: 2.5rem;
        font-weight: 500;
        letter-spacing: 0.2rem;
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        padding: 20px;
        display: block;
    }

    #header .nav-list ul a::after {
        content: attr(data-after);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        color: rgba(240, 248, 255, 0.021);
        font-size: 13rem;
        letter-spacing: 50px;
        z-index: -1;
        transition: 0.3s ease letter-spacing;
    }

    #header .nav-list ul li:hover a::after {
        transform: translate(-50%, -50%) scale(1);
        letter-spacing: initial;
    }

    #header .nav-list ul li:hover a {
        color: #2c7da0;
    }

    /* End Header section */

    /* Hero Section */
    #hero {
        background-image: url("bg1.png");
        background-size: cover;
        background-position: top center;
        position: relative;
        z-index: 1;
    }

    #hero::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.7;
        z-index: -1;
    }

    #hero .hero {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 50px;
        justify-content: flex-start;
    }

    #hero h1 {
        display: block;
        width: fit-content;
        font-size: 4rem;
        position: relative;
        color: transparent;
        animation: text_reveal 0.5s ease forwards;
        animation-delay: 1s;
    }

    #hero h1:nth-child(1) {
        animation-delay: 1s;
    }

    #hero h1:nth-child(2) {
        animation-delay: 2s;
    }

    #hero h1:nth-child(3) {
        animation: text_reveal_name 0.5s ease forwards;
        animation-delay: 3s;
    }

    #hero h1 span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: white;
        animation: text_reveal_box 1s ease;
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(1) span {
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(2) span {
        animation-delay: 1.5s;
    }

    #hero h1:nth-child(3) span {
        animation-delay: 2.5s;
    }

    /* End Hero Section */

    /* Services Section */
    #services .services {
        flex-direction: column;
        text-align: center;
        max-width: 1500px;
        margin: 0 auto;
        padding: 100px 0;
    }

    #services .service-top {
        max-width: 500px;
        margin: 0 auto;
    }

    #services .service-bottom {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    #services .service-item {
        flex-basis: 80%;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
        padding: 30px;
        border-radius: 10px;
        margin: 10px 5%;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    #services .service-item::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
        opacity: 0.9;
        z-index: -1;
    }

    #services .service-bottom .icon {
        height: 80px;
        width: 80px;
        margin-bottom: 20px;
    }

    #services .service-item h2 {
        font-size: 2rem;
        color: white;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    #services .service-item p {
        color: white;
        text-align: left;
    }

    /* End Services Section */

    /* About Section */
    #about .about {
        flex-direction: column-reverse;
        text-align: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 20px;
    }

    #about .col-left {
        width: 250px;
        height: 360px;
    }

    #about .col-right {
        width: 100%;
    }

    #about .col-right p {
        margin-bottom: 20px;
    }

    #about .col-left .about-img {
        height: 100%;
        width: 100%;
        position: relative;
    }

    /* End About Section */

    /* contact Section */
    #contact .contact {
        flex-direction: column;
        max-width: 1200px;
        margin: 0 auto;
        width: 90%;
    }

    #contact .contact-items {
        width: 100%;
    }

    #contact .contact-item {
        width: 80%;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        padding: 30px;
        margin: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0px 0px 18px 0 #0000002c;
        transition: 0.3s ease box-shadow;
    }

    #contact .contact-item:hover {
        box-shadow: 0px 0px 5px 0 #0000002c;
    }

    #contact .icon {
        width: 70px;
        margin: 0 auto;
        margin-bottom: 10px;
    }

    #contact .contact-info h1 {
        font-size: 2.5rem;
        font-weight: 500;
        margin-bottom: 5px;
    }

    #contact .contact-info h2 {
        font-size: 1.3rem;
        line-height: 2rem;
        font-weight: 500;
    }

    /*End contact Section */

    /* Footer */
    #footer {
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
    }

    #footer .footer {
        min-height: 200px;
        flex-direction: column;
        padding-top: 50px;
        padding-bottom: 10px;
    }

    #footer .social-icon {
        display: flex;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    #footer .social-item {
        height: 50px;
        width: 50px;
        margin: 0 5px;
    }

    #footer .social-item img {
        filter: grayscale(1);
        transition: 0.3s ease filter;
    }

    #footer .social-item:hover img {
        filter: grayscale(0);
    }

    #footer p {
        color: white;
        font-size: 1.3rem;
    }

    /* End Footer */

    /* Keyframes */
    @keyframes hamburger_puls {
        0% {
            opacity: 1;
            transform: scale(1);
        }

        100% {
            opacity: 0;
            transform: scale(1.4);
        }
    }

    @keyframes text_reveal_box {
        50% {
            width: 100%;
            left: 0;
        }

        100% {
            width: 0;
            left: 100%;
        }
    }

    @keyframes text_reveal {
        100% {
            color: white;
        }
    }

    @keyframes text_reveal_name {
        100% {
            color: #2c7da0;
            font-weight: 500;
        }
    }

    /* End Keyframes */

    /* Media Query For Tablet */
    @media only screen and (min-width: 768px) {
        .cta {
            font-size: 2.5rem;
            padding: 20px 60px;
        }

        h1.section-title {
            font-size: 6rem;
        }

        /* Hero */
        #hero h1 {
            font-size: 7rem;
        }

        /* End Hero */

        /* Services Section */
        #services .service-bottom .service-item {
            flex-basis: 45%;
            margin: 2.5%;
        }

        /* End Services Section */

        /* Project */
        #projects .project-item {
            flex-direction: row;
        }

        #projects .project-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        #projects .project-item {
            height: 400px;
            margin: 0;
            width: 100%;
            border-radius: 0;
        }

        #projects .all-projects .project-info {
            height: 100%;
        }

        #projects .all-projects .project-img {
            height: 100%;
        }

        /* End Project */

        /* About */
        #about .about {
            flex-direction: row;
        }

        #about .col-left {
            width: 600px;
            height: 400px;
            padding-left: 60px;
        }

        #about .about .col-left .about-img::after {
            left: -45px;
            top: 34px;
            height: 98%;
            width: 98%;
            border: 10px solid #2c7da0;
        }

        #about .col-right {
            text-align: left;
            padding: 30px;
        }

        #about .col-right h1 {
            text-align: left;
        }

        /* End About */

        /* contact  */
        #contact .contact {
            flex-direction: column;
            padding: 100px 0;
            align-items: center;
            justify-content: center;
            min-width: 20vh;
        }

        #contact .contact-items {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 0;
        }

        #contact .contact-item {
            width: 30%;
            margin: 0;
            flex-direction: row;
        }

        #contact .contact-item .icon {
            height: 100px;
            width: 100px;
        }

        #contact .contact-item .icon img {
            object-fit: contain;
        }

        #contact .contact-item .contact-info {
            width: 100%;
            text-align: left;
            padding-left: 20px;
        }

        /* End contact  */
    }

    /* End Media Query For Tablet */

    /* Media Query For Desktop */
    @media only screen and (min-width: 1200px) {

        /* header */
        #header .hamburger {
            display: none;
        }

        #header .nav-list ul {
            position: initial;
            display: block;
            height: auto;
            width: fit-content;
            background-color: transparent;
        }

        #header .nav-list ul li {
            display: inline-block;
        }

        #header .nav-list ul li a {
            font-size: 1.8rem;
        }

        #header .nav-list ul a:after {
            display: none;
        }

        /* End header */

        #services .service-bottom .service-item {
            flex-basis: 22%;
            margin: 1.5%;
        }
    }

    /* End  Media Query For Desktop */
</style>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><strong>Traveleo Tour & Travel</strong></h1>
                    </a>
                </div>
                <div class="nav-list">
                    <ul>
                        <li><a href="hero" data-after="Home">Beranda</a></li>
                        <li><a href="services" data-after="Service">Layanan</a></li>
                        <li><a href="about" data-after="About">Tentang Kami</a></li>
                        <li><a href="contact" data-after="Contact">Hubungi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Halo, <span></span></h1>
                <h1>Selamat Datang Di<span></span></h1>
                <h1>Traveleo Tour & Travel <span></span></h1>
                <a href="login" type="button" class="cta">Login</a>
                <a href="register" type="button" class="cta">Register</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Layanan</h1>
                <p>
                    Traveleo Tour & Travel kini menyediakan layanan penyewaaan mobil. Selama anda menggunakan jasa ini anda akan mendapatkan layanan yang terbaik untuk perjalanan anda.
                </p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png" /></div>
                    <h2>Pemesanan</h2>
                    <p>Fitur pemesanan dapat digunakan oleh penyewa untuk melakukan pemesanan mobil.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/344/external-payment-hotel-and-restaurant-inipagistudio-mixed-inipagistudio.png" /></div>
                    <h2>Pembayaran</h2>
                    <p>Fitur pembayaran dapat digunakan oleh penyewa untuk mempermudah melakukan pembayaran.</p>
                </div>
                <!-- <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/friends--v3.png" /></div>
                    <h2>Connection</h2>
                    <p>Fitur Connection digunakan untuk memperluas jaringan antar mahasiswa untuk saling terhubung dan memungkinkan pengguna untuk mengetahui aktivitas pengguna lain.</p>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="/images/logo.jpeg" />
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">Tentang Kami</h1>
                <p>
                    Traveleo Tour & Travel merupakan sebuah sistem yang dirancang untuk membantu para penyewa dalam memperoleh informasi dan menjadi wadah untuk penyewaan. Dengan dirancangnya Website ini, penyewa dapat memperoleh informasi lebih dan mudah untuk memilih mobil yang akan disewa.
                </p>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Hubungi</h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>LeoRenzo Tambun</h2>
                        <h2>+62 812-8441-234</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>leotambun12@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Jl. Silangit</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><strong>Traveleo Tour & Travel</strong></h1>
            </div>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
                </div>
            </div>
            <p>Copyright by Kelompok 10 PSI IT Del 2022</p>
        </div>
    </section>
    <!-- End Footer -->
</body>

</html>