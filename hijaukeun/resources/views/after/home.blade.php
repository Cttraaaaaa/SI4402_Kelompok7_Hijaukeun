@extends('after.header')
@section('content')

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Hijau<span>Keun</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#donation">Donation</a>
        <a href="#service">services</a>
        <a href="#locate">location</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <a href="{{ route('login') }}" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3></h3>
        <span>#Hijaukeundunya</span>
        <p>Mari kita bersama hijaukan Indonesia!</p>
        <a href="#donation" class="btn">Donate NOW !</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/hijaukeun.mp4" loop autoplay muted></video>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>HIJAU KEUN adalah sebuah website yang berfokus dalam penghijauan atau penanaman pepohonan di tempat atau dareah-daerah yang kekurangan penghijauan dengan menjalankan donasi untuk penanaman pohon di daerah yang sekiranya memerlukan penanaman.
            <p>Website ini dibuat berawal dari keresahan kami yang melihat banyaknya bencana alam seperti longsor yang terjadi karena salah satu penyebabnya adalah kurangnya penghijauan atau penanaman pohon di daerah tersebut.</p>
            <a href="#service" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container" id="service">

    <div class="icons">
        <img src="images" alt="">
        <div class="info">
            <h3>Donate</h3>
            <span>#Hijaukeundunya</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/" alt="">
        <div class="info">
            <h3>Tips n Tricks</h3>
            <span>Everything about go green</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/" alt="">
        <div class="info">
            <h3>Request</h3>
            <span>you can request a place</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/" alt="">
        <div class="info">
            <h3>secure donate</h3>
            <span>protected by eiger</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- donation section starts  -->

<section class="donate" id="donation">

    <h1 class="heading"> Our <span>Donation</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/HUTAN1.jpeg" alt="">
                <div class="icons">
                    <a href="DonateNow.php" name="donatenow" value="kalimantan" class="cart-btn">Donate Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Kalimantan</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/HUTAN2.jpg" alt="">
                <div class="icons">
                    <a href="DonateNow.php" name="donatenow" value="Banten" class="cart-btn">Donate Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Banten</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/HUTAN3.jpg" alt="">
                <div class="icons">
                    <a href="DonateNow.php" name="donatenow" value="Sumatera" class="cart-btn">Donate Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Sumatera</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/HUTAN3.jpg" alt="">
                <div class="icons">
                    <a href="DonateNow.php" name="donatenow" value="Sulawesi"class="cart-btn">Donate Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Sulawesi</h3>
            </div>
        </div>


    </div>

</section>

<!-- donation section ends -->

<!-- location starts  -->

<section class="locate" id="locate">

<h1 class="heading"> Our <span>Location</span> </h1>

<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.8540733742851!2d107.82379134173532!3d-6.9553583361901286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c50f5a999681%3A0x57b11ae3f5d7b879!2zNsKwNTcnMTkuNCJTIDEwN8KwNDknMjQuNSJF!5e0!3m2!1sen!2sid!4v1665921578165!5m2!1sen!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>      

</section>

<!-- ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/pp.png" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#donation">Donate</a>
            <a href="#locate">location</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+6212345678</a>
            <a href="#">kelompok07@gmail.com</a>
            <a href="#">bojongsoang, indonesia - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Kelompok 07 </span> | all rights reserved </div>

</section>

<!-- footer section ends -->   
</body>
</html>
@endsection