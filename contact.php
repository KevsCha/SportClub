<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./style/style_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/general.css">
    <link rel="stylesheet" href="./style/responsive.css">
    <title>Contact</title>
</head>
<body>
    <div class="contain_style">
    <header id="home">
            <nav class="header_nav">
                <div class="logo">
                    <a href="index.html"><img src="./img/logo.png" alt="logo"></a>
                </div>
                <ul>
					<a href="index.html"><li>HOME</li></a>
					<a href="about.html"><li>ABOUT</li></a>
					<a href="tournament.html"><li>TOURNAMENT</li></a>
					<a href="gallery.html"><li>GALLERY</li></a>
					<a href="contact.php"><li  class="nav_active">CONTACT</li></a>
					<div class="layout"></div>
				</ul>
                <div id="btn_menu" class="hamburguer_menu ">
                    <div class="layout_menu"></div>
                    <div class="layout_menu"></div>
                    <div class="layout_menu"></div>
                </div>
            </nav>
        </header>
        <main>
            <div class="banner_club">
                <div>
                    <p>Contact Us</p>
                    <h3>Connect with the Heart of Volleyball: Your Passion, Our Mission</h3>
                </div>
            </div>
            <div class="contain_map">
                <h1>Discover Our Training Centers</h1>
                <p>If you are passionate about volleyball and looking for a place to develop your skills, you have come to the right place! At our club, we value the potential of every player and are dedicated to providing a professional and motivating training environment.</p>
                <p>We have training centers equipped with top-tier facilities, strategically located in various parts of the city to offer you convenience and accessibility. Join us and become part of a sports community committed to excellence and teamwork. We have a total of 67 teams: <strong> 21 men's teams, 33 women's teams, and 13 mixed teams</strong>, distributed across cadet, juvenile, junior, and senior categories. Discover below the locations of our training centers.</p>
                <div class="container mt-5">
                    <div class="row justify-content-center mt-3">     
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact_us" class="contain_form">
                <section class="ftco-section">
                    <div class="container_form">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="wrapper">
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-map-marker"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Headquarters:</span> Entrevías, Puente de Vallecas, 28053 Madrid</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Intagram:</span> <a href="https://www.instagram.com/">@yoursite</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-7">
                                            <div class="contact-wrap w-100 p-md-5 p-4">
                                                <h3 class="mb-4">Contact Us</h3>
                                                <div id="form-message-warning" class="mb-4"></div> 
                                          <div id="form-message-success" class="mb-4">
                                            Your message was sent, thank you!
                                          </div>
                                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="label" for="name">Full Name</label>
                                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6"> 
                                                            <div class="form-group">
                                                                <label class="label" for="email">Email Address</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="label" for="subject">Subject</label>
                                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="label" for="#">Message</label>
                                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                                <div class="submitting"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5 d-flex align-items-stretch">
                                            <div class="info-wrap w-100 p-5 img" style="background-image: url(./img/pxfuel\ \(7\).jpg); filter: brightness(.7);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-5">
                        <h4 class="mb-5 fw-bold">CONTACT INFO</h4>
                        <ul class="list_contact mb-5">
                            <a href=""><li><span></span>12 Main Street Pt. London</li></a>
                            <a href=""><li><span></span>[email protected]</li></a>
                            <a href=""><li><span></span>+44 3656 4567</li></a>
                        </ul>
                        <div class="social_red">
                            <a href="https://www.facebook.com/"><img src="./img/icon/brand-facebook.svg" alt="facebook"></a>
                            <a href="https://x.com/"><img src="./img/icon/brand-x.svg" alt="twitter"></a>
                            <a href="https://www.instagram.com/"><img src="./img/icon/brand-instagram.svg" alt="instagram"></a>
                            <a href="https://www.pinterest.es/"><img src="./img/icon/brand-pinterest.svg" alt="pinterest"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <h4 class="mb-5 fw-bold">RECENT POST</h4>
                        <div class="links_section">
                            <span><a href="./gallery.html">Gallery post</a></span>
                            <span><a href="./tournament.html">Transmission channel</a></span>
                            <span><a href="./tournament.html#table_fed">Result week</a></span>
                            <span><a href="./about.html#staff">League coaches</a></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <h4 class="mb-5 fw-bold">RECENT WORK</h4>
                        <div class="galery_section">
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel (1).jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel (2).jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel (3).jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel (4).jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel.jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                            <div class="img_link">
                                <img onclick="redirect('gallery.html')" src="./img/pxfuel (7).jpg" alt="sample_img">
                                <img onclick="redirect('gallery.html')" src="./img/icon/link.svg" alt="chain">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <div class="contain_logo">
                            <img src="./img/logo.png" alt="" width="200px">    
                            <h1 class="mt-3 fw-bold">WARRIORS</h1>
                            <p>"Fuerza, Unidad y Victoria: ¡Warriors en la Red!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	<script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script src="./js/contact.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjdvQctggYECk1PnwnP36_Ntib8V6vqDc&callback=initMap">
    </script>
    <script src="./js/general.js"></script>
</body>
</html>