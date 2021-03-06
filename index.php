<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Wedding</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include('includes/fonts.php'); ?>
</head>
<body>
<?php include('includes/navigation.php'); ?>

<div class="container-fluid px-0">
    <div class="row my-auto px-0 g-0">
        <div class="col-12">
            <div class="home-back vertical-center">
                <div class="text-center font-main text-white">
                    <h1>Kate</h1>
                    <h4>and</h4>
                    <h1>Jared</h1>
                    <div class="spinner-border text-light" role="status" id="spinner">
                    </div>
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
    var countDownDate = new Date("Jun 25, 2022 15:37:25").getTime();

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
        document.getElementById("spinner").style.display = "none";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "We did it!";
        }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>