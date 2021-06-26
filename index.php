<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wedding</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php include('includes/fonts.php'); ?>
</head>
<body>
<?php include('includes/navigation.php'); ?>

<div class="container-fluid px-0">
    <div class="row my-auto">
        <div class="col-12">
            <div class="home-back vertical-center">
                <div class="text-center font-main text-white">
                    <h1>Kate</h1>
                    <h4>and</h4>
                    <h1>Jared</h1>
                    <h5 id="demo" class="font-handwrite">
                    </h5>
                    <h6 class="font-handwrite">Until the big day</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="container-fluid px-0">-->
<!--    <div class="row mt-3">-->
<!--        <div class="col-md-5 my-auto">-->
<!--            <div class="text-center font-main">-->
<!--                <h1>Kate</h1>-->
<!--                <h4 class="font-handwrite">and</h4>-->
<!--                <h1>Jared</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-7 my-auto">-->
<!--            <div class="text-center p-5">-->
<!--               <div class="home-img">-->
<!--               </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">-->
<!--            <img src="https://i.ibb.co/M8zGsQj/landscape1.jpg"-->
<!--                    class="w-100 shadow-1-strong rounded mb-4"-->
<!--                    alt=""/>-->
<!--            <img src="https://i.ibb.co/555Gc4D/portrait1.jpg"-->
<!--                    class="w-100 shadow-1-strong rounded mb-4"-->
<!--                    alt=""/>-->
<!--        </div>-->
<!--        <div class="col-lg-4 mb-4 mb-lg-0">-->
<!--            <img src="https://i.ibb.co/rxP2QTz/portrait2.jpg"-->
<!--                 class="w-100 shadow-1-strong rounded mb-4"-->
<!--                 alt=""/>-->
<!---->
<!--            <img src="https://i.ibb.co/pQmvvcd/landscape4.jpg"-->
<!--                    class="w-100 shadow-1-strong rounded mb-4"-->
<!--                    alt=""/>-->
<!--        </div>-->
<!--        <div class="col-lg-4 mb-4 mb-lg-0">-->
<!--            <img src="https://i.ibb.co/hX75ybn/landscape3.jpg"-->
<!--                    class="w-100 shadow-1-strong rounded mb-4"-->
<!--                    alt=""/>-->
<!--            <img src="https://i.ibb.co/p0Lk27D/landscape2.jpg"-->
<!--                 class="w-100 shadow-1-strong rounded mb-4"-->
<!--                 alt=""/>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php //include('includes/footer.php'); ?>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + " days";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "We did it!";
        }
    }, 1000);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>