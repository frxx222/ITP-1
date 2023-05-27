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

    <title>Tourism Guide</title>
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
    </main>

    <!-- about -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="main-page/img/planet.jpg">
                </div>
                <div class="column right">
                    <div class="text">BUENAVISTA</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi autem enim vel velit dicta omnis quisquam, consequuntur consectetur voluptates sequi officia quidem dignissimos assumenda ullam earum iste, est quae dolorum illo repellat. Deleniti, officiis inventore? Aspernatur perferendis dolorum sed vel ea assumenda, consequuntur omnis. Distinctio quisquam rem, optio delectus quam consequatur dicta omnis inventore vero unde nostrum ad in possimus.</p>
                    <a href="#">See more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="tour" id="tour">
        <h2 class="title"><a href="tour.php"> Top Tourist</a></h2>
        <div class="tour-container">
            <div class="box">
                <img src="main-page/img/planet.jpg" alt="">
                <h3>Boac</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="box">
                <img src="main-page/img/planet.jpg" alt="">
                <h3>Gasan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="box">
                <img src="main-page/img/planet.jpg" alt="">
                <h3>Mogpog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact Us</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero minima, sapiente repellendus iure molestiae ipsum. Architecto laboriosam omnis, mollitia possimus, fugiat sint totam voluptates reiciendis aliquam quidem repellat asperiores.</p>
                        <div class="icon">
                            <div class="list">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Jayvee Enobay</div>
                                </div>
                            </div>

                            <div class="list">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">BLAHBLAH</div>
                                </div>
                            </div>

                            <div class="list">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">abcd@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message Us</div>
                        <div class="contact-message">
                            <form>
                                <input type="text" name="Name" placeholder="Your Name" required>
                                <input type="email" name="Email" placeholder="Your Email" required>
                                <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                                <button type="submit" class="btn btn2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="copyright">
            <p>Copyright <i class="fa-regular fa-copyright" style="color: #fff;"></i> TOURISM MANAGEMENTT OF MARINDQUE </p>
        </footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>