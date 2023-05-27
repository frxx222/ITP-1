<?php
    include 'config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <main id="header">
        <nav>
            <h1>TOURISM</h1>
            <div class="nav-links">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#tour">Tourist Spot</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </main>
    <!-- slides -->
    <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="main-page/img/haynon.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="main-page/img/bellaroca.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="main-page/img/slides.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="position-absolute top-100 start-50 translate-middle">
        <form class="search_bar" method="GET">
            <input type="text" id="search" name="search" placeholder="Search">
            <button type="submit" name="submit">Search</button>
        </form>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($con, $_POST['search']);
        $sql = "SELECT * FROM tblcard WHERE Title LIKE '%$search%' OR Content LIKE '%$search%'";

        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "<p class='result-count'>There are " . $queryResult . " results!</p>";

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='context-box'>
                    <h3 class='title'>" . $row['Title'] . "</h3>
                    <p class='context'>" . $row['Content'] . "</p>
                    <img src='uploadImage/" . $row['Image'] . "' class='image' alt='Image'>
                </div>";
            }
        } else {
            echo "<p class='no-results'>There are no results matching your search!</p>";
        }
        
    }

    
    ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>