<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hijaukeun</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/log.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Overpass', sans-serif;
            scroll-behavior: smooth;
        }
    
    </style>
</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Hijau<span>Keun</span></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#about">about</a>
        <a href="#donation">Donation</a>
        <a href="#service">services</a>
        <a href="#locate">location</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <a href="index.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<br>
<br>
<br> <br> 
<h3 class="heading"><span> Donate Here! </span></h3>

<!-- Card -->
<div class="card mt-3">
    <div class="row">
        <div class="col-lg-6 mt-5 m-5 ">
            <div class="container ">
                <img src=<?= $gambarhutan ?> class="rounded" alt="" width="500" height="300">
            </div>
        </div>
        <div class="col-lg-6 mt-5 m-5">
        <div class="form-container">
            <form action="" method="post">
                <h4>Fill Donation Amount</h4>
                <div class="mb-3">
                    <input type="donation" name="donation" required placeholder="Rp.                                                                                  0">
                </div>
                <div class="mb-3">
                    <h4>Incognito Name</h4>
                    <input type="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <h4>Email</h4>
                    <input type="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <h4>Payment</h4>
                    <select name="payment" required placeholder="Choose your way to donate">
                        <option value="user">Shopeepay</option>
                        <option value="admin">Gopay</option>
                        <option value="admin">Dana</option>
                        <option value="admin">Transfer Bank</option>
                    </select>
                </div>
                <div class="mb-3">
                    <h4>Your Hope for this donation (Optional)</h4>
                    <input type="hope" name="hope" required placeholder="Enter your hope">
                </div>
                <input type="submit" name="submit" value="Donate Now" class="form-btn">
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>