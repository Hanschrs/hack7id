<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php
$current = 10;
require('header.php');
?>
<!--
#Portfolio
========================== -->
<section id="portfolio">
    <img class="img-responsive dest-indo" src="img/dest/indonesia.jpg" alt="">
    <div class="section-title text-center wow fadeInDown">
        <h2>Yogyakarta</h2>
        <h5>Yogyakarta adalah sebuah provinsi yang kaya akan adat dan tradisi dari berabad-abad lalu. Berbeda dengan provinsi lain di Indonesia, pemerintah daerah Yogyakarta secara turun temurun dipimpin oleh seorang Sultan, sehingga menjadikan daerah ini layak menyandang titel Daerah Istimewa.</h5>
    </div>
    </div>
    
    <div id="projects" class="clearfix">
        <div class="room">
            <a href="chatroom.php">
                <div class="row roow">
                    <div class="col-md-6">
                        <h3>Goa Pindul</h3>
                        <br>
                        <h4>Manjakan mata Anda dengan keiindahan stalaktit dan stalagmit yang sudah ada di goa ini sejak ratusan tahun lalu. </h4>
                    </div>
                    <div class="col-md-4">
                        <h2 class="tgl"></h2>
                    </div>
                    <div class="col-md-2">
                        <div class="time">
                            <span class="fa fa-calendar
                            "></span><h5 class="info">21 Mei 2017</h5>
                            <br>
                            <span class="fa fa-group
                            "></span><h5 class="info">1/5</h5>
                            <br>
                            <span class="fa fa-user
                            "></span><h5 class="info">Kevin</h5>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <hr>
            <br>
            <a href="">
                <div class="row roow">
                    <div class="col-md-6">
                        <h3>Kalibiru</h3>
                        <br>
                        <h4>Tidak seperti taman wisata alam biasa, saat melakukan berbagai aktivitas petualangan di sini Anda bakal ditemani dengan hamparan pemandangan gunung yang begitu menakjubkan.</h4>
                    </div>
                    <div class="col-md-4">
                        <h2 class="tgl"></h2>
                    </div>
                    <div class="col-md-2">
                        <div class="time">
                            <span class="fa fa-calendar
                            "></span><h5 class="info">21 Mei 2017</h5>
                            <br>
                            <span class="fa fa-group
                            "></span><h5 class="info">1/5</h5>
                            <br>
                            <span class="fa fa-user
                            "></span><h5 class="info">Ahmad</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </div> <!-- end #projects -->
    </section>
    <!--
    End #Portfolio
    ========================== -->
    <?php
    require('footer.php');
    ?>
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 21, 2017 15:37:25").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    var y=document.getElementsByClassName("tgl")
    // Output the result in an element with id="demo"
    for (var i = 0; i < 2; i++) {
    y[i].innerHTML = days + "day(s) left";
    }
    
    // If the count down is over, write some text
    if (distance < 0) {
    clearInterval(x);
    for (var i = 0; i < 2; i++) {
    y[i].innerHTML = "EXPIRED";
    }
    
    }
    }, 1000);
    </script>
</body>
</html>