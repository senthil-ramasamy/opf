<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Kirang+Haerang" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/fav.ico" sizes="32x32">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/slicebox.css">
        <link rel="stylesheet" href="css/colorbox.css">
        <link rel="stylesheet" href="css/style.css">

        <title>One People Festival</title>
    </head>
    <body>
        <?php
        $msg = "";

        include 'PHPMailer.php';
        include 'SMTP.php';
        include 'mail.php';
        ?>
        <div class="site">
            <div class="banner">
                <div class="banner_img">
                    <div class="overlay"></div>
                    <div class="header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="logo"><img src="images/logo.png" /></a>                                
                                </div>
                                <div class="col-md-8">
                                    <div class="event_name text-right">
                                        <!--<span><i class="fa fa-font-awesome" aria-hidden="true"></i> Event</span>-->
                                        <span><i class="fa fa-map-signs" aria-hidden="true"></i> EC41.</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> Aug 4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="social">
                                <a href="https://www.facebook.com/onepeoplefestival/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/Onepeoplefest?s=17" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/onepeoplefestival/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="timer">
                                <div class="timer_n">
                                    <span id="timer_day" class="timer_day">102</span>
                                    <span>Days</span>
                                </div>
                                <div class="timer_n">
                                    <span id="timer_hours" class="timer_hours">12</span>
                                    <span>Hours</span>
                                </div>
                                <div class="timer_n">
                                    <span id="timer_minutes" class="timer_minutes">40</span>
                                    <span>Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h2>One People Festival</h2>
                        <p style="font-size: 19px">The One People Festival is an idea and a revolution of music , art , food trucks , Creative installations and camping by the ever famous coast of Chennai .It represents itself as a unified platform for the music & arts community in collaboration with local vendors and businesses</p>

                        <a href="http://imojo.in/OnePeopleFestival" target="_blank" class="button">Buy Ticket</a>
                    </div>
                </div>
                <img src="images/logo-l.png" alt="" class="abs_img">
            </div>

            <div class="slider">
                <div class="container">
                    <div class="text-center"><h3 class="heading"><span>Line-Up</span></h3></div>
                    <div class="row">
                        <div class="col-md-6 pad-bo20">
                            <div class="flip"> 
                                <div class="front"> 
                                    <img src="images/1.png" alt="" />
                                </div> 
                                <div class="back">
                                    <h3>Frank's got the funk</h3>
                                    <p>Bjorn Surrao : Vocalist / Rhythm Guitarist</p>
                                    <p>Shashank Vijay : Drums </p>
                                    <p>Sajith Satya : Bass Guitar  </p>
                                    <p>GodFray Immanuel : Guitarist  </p>
                                    <p>Franks Got The Funk is an Electronic Rock / Alternative band from Chennai, formed in 2009. The band draw influences from various other musical genres such as Funk, Alternative, Rock, Blues etc so that everyone has something to go along with the bands "Funk". The band has a simple principle which they stick to when making their music – It’s all about fun and love for the music based on situations and incidents which they’ve been through. In fact, the sole motivation for the band to record and release their music is to get the music out there to the people. The surging energy and the addictive songs the band churns out are complemented by the capturing stage presence and wacky costumes, which keeps audiences enraptured and jumping.</p>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 pad-bo20">
                            <div class="flip"> 
                                <div class="front"> 
                                    <img src="images/2.png" alt="" />
                                </div> 
                                <div class="back">
                                    <h3>Junkyard Groove</h3>
                                    <p>Ameeth Thomas - Lead vocals and acoustic guitar</p>
                                    <p>Josh Mark Raj - Electric guitars and backing vocals </p>
                                    <p>Jitesh James Dharmaraj – Bass guitar and backing vocals </p>
                                    <p>Ritesh John Dharmaraj – Drums and backing vocals</p>
                                    <p>Junkyard Groove was formed in the year 2005 and has become a mainstay in the Indian independent music scene. The band has featured several brilliant musicians through its decade long presence among the top 10 indie bands in the country. JYG have 2 albums and 2 E.P's to our credit, have won awards and garnered a loyal base of fans and followers. The band has played at some of the biggest festivals and has had the honour of opening for bands like Iron Median, Megadeath, Prodigy, Machine Head, Mr. Big and more. Junkyard Groove is best known for its unique music styling laced with catchy hooks and a live wire performance with none to match. A Google search of Junkyard Groove would provide a much more detailed description of the band and its milestones. </p>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 pad-bo20">
                            <div class="flip"> 
                                <div class="front"> 
                                    <img src="images/3.png" alt="" />
                                </div> 
                                <div class="back">
                                    <h3>Manoj and the band</h3>
                                    <p>Manoj – Violin </p>
                                    <p>Yeshwanth – Keyboards </p>
                                    <p>Livingston – Percussion </p>
                                    <p>Derik – Bass guitar </p>
                                    <p>Manoj & The band are the ideal hybrid carnatic fusion act. They are well known for the spontaneity, time signatures and soulful melodies </p>

                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 pad-bo20">
                            <div class="flip"> 
                                <div class="front"> 
                                    <img src="images/4.png" alt="" />
                                </div> 
                                <div class="back">
                                    <h3>Wayside</h3>
                                    <p>Elvis Xaviour - Vocals & Guitars,</p>
                                    <p>Shiv Rekhi - Bass,</p>
                                    <p>Pranav Kr – Drums</p>
                                    <p>3 piece rock band formed in the city of Chennai in July, 2016. The members of the band are Elvis Xaviour (Vocals & Guitar), Shiv Rekhi (Bass) and Pranav KR (Drums).</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colorbox-hide">
                    <div id="franks-got-the-funk">
                        <div class="colorbox-outer">
                            Frank's got the funk
                        </div>
                    </div>
                    <div id="junkyard-groove">
                        <div class="colorbox-outer">
                            Junkyard Groove
                        </div>
                    </div>
                    <div id="manoj-and-the-band">
                        <div class="colorbox-outer">
                            Manoj and the band
                        </div>
                    </div>
                    <div id="wayside">
                        <div class="colorbox-outer">
                            Wayside
                        </div>
                    </div>
                    <div id="the-grownups">
                        <div class="colorbox-outer">
                            The grownups
                        </div>
                    </div>
                </div>
                <img src="images/logo-l.png" alt="" class="abs_img">
            </div>
            <div class="sound_div">
                <div class="container">
                    <div class="text-center"><h3 class="heading"><span>sounds</span></h3></div>
                    <div class="row">
                         <div class="col-md-12 pad-bo20">
                            <iframe width="100%" height="200" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/565930671&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                        </div> 
                    </div>
                </div>
                <img src="images/logo-l.png" alt="" class="abs_img">
            </div>
            <div class="about b">
                <div class="container">
                    <div class="text-center"><h3 class="heading"><span>Activities</span></h3></div>
                    <div class="row">
                        <ul class="tab-nav">
                            <li class="active"><a class="tab_h" href="">Art Installations</a></li>
                            <li><a class="tab_h" href="">Camping</a></li>
                            <li><a class="tab_h" href="">Flea Market</a></li>
                            <li><a class="tab_h" href="">Food Truck</a></li>
                            <li><a class="tab_h" href="2">Live Art</a></li>
                            <li><a class="tab_h" href="">Star Gazing</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/art-installations.png" class="img-100">
                            <h4 class="he">Art Installations</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/camping.png" class="img-100">
                            <h4 class="he">Camping</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/flea-market.png" class="img-100">
                            <h4 class="he">Flea Market</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/foodtruck.png" class="img-100">
                            <h4 class="he">Food Truck</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/live-art.png" class="img-100">
                            <h4 class="he">Live Art</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="images/star-gazing.png" class="img-100">
                            <h4 class="he">Star Gazing</h4>
                        </div>
                    </div>
                </div>
                <img src="images/logo-l.png" alt="" class="abs_img">
            </div>
            <div class="contact">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_detail">
                                <div class="text-center"><h3 class="heading"><span>Lets get in touch</span></h3></div>
                                <form class="frm-contact" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input name="frmName" type="text" class="form-control frmName" placeholder="Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="frmEmail" type="text" class="form-control frmEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input name="frmPhone" type="text" class="form-control frmPhone" placeholder="Phone number">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="frmSubject" type="text" class="form-control frmSubject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="frmText" class="form-control frmText" placeholder="Phone number"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="button">
                                    </div>
                                    <?php if ($msg != "") { ?>
                                        <div class="frmMsg">
                                            <?php echo $msg; ?>
                                        </div>
                                    <?php } ?>
                                </form>
                                <div class="contact_nt">
                                    <span><i class="fa fa-home"></i> Address</span>
                                    <span>East Coast Road,Injambakkam,Chennai,Tamil Nadu 600041</span>
                                </div>
                                <div class="contact_nt">
                                    <span><i class="fa fa-envelope"></i> Email</span>
                                    <span><a href="mailto:onepeoplefestival@gmail.com">onepeoplefestival@gmail.com</a></span>
                                </div>
                                <?php /*<div class="contact_nt">
                                    <span><i class="fa fa-mobile"></i> Phone number</span>
                                    <span><a href="tel:+919999988888">+91 99999 88888</a></span>
                                </div> */ ?>
                            </div>
                            <img src="images/logo-l.png" alt="" class="abs_img">
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.943365358634!2d80.25195651437451!3d12.911361590895458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525cbd731d462f%3A0xa50dab1f92fe8fba!2sEC+41!5e0!3m2!1sen!2sin!4v1532166077808" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 text-left">Copyright &copy; OnePeople <span>Designed by <a href="http://www.auspiciouscluster.com" target="_blank">AuspiciousCluster</a></span></div>
                        <div class="col-md-4 text-right social">
                            <a href="https://www.facebook.com/onepeoplefestival/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/Onepeoplefest?s=17" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/onepeoplefestival/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/jquery.js" type="text/javascript"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>
            <script src="js/modernizr.js" type="text/javascript"></script>
            <script src="js/jquery.slicebox.js" type="text/javascript"></script>
            <script src="js/jquery.colorbox.js" type="text/javascript"></script>
            <script src="js/jquery.flip.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $('#sb-slider').slicebox({
                    orientation: 'r',
                    cuboidsRandom: true,
                    disperseFactor: 30,
                    autoplay: true,
                });
                $(".inline").colorbox({inline: true, width: "50%"});

                // Set the date we're counting down to
                var countDownDate = new Date("Aug 04, 2018 18:00:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function () {
                    // Get todays date and time
                    var now = new Date().getTime();
                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    // Display the result in the element with id="demo"
                    document.getElementById("timer_day").innerHTML = ("00" + days).slice(-2);
                    document.getElementById("timer_hours").innerHTML = ("00" + hours).slice(-2);
                    document.getElementById("timer_minutes").innerHTML = ("00" + minutes).slice(-2);
                    document.getElementById("timer_seconds").innerHTML = ("00" + seconds).slice(-2);
                    // If the count down is finished, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("timer_block").css("display", "none");
                        document.getElementById("timer_day").innerHTML = "00";
                        document.getElementById("timer_hours").innerHTML = "00";
                        document.getElementById("timer_minutes").innerHTML = "00";
                        document.getElementById("timer_seconds").innerHTML = "00";
                    }
                }, 1000);
            </script>
            <script>
                $(function () {
                    $(".flip").flip({
                        trigger: 'hover'
                    });
                });
            </script>
        </div>
    </body>
</html>