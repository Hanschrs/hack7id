<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php
$current=0;
require('header.php');
?>
<!--
#Portfolio
========================== -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section id="portfolio">
    <figure class="gambar">
        <img class="img-responsive  dest-indo" src="img/dest/indonesia.jpg" alt="">
        <figcaption class="deskripsi">
        <h1>Goa Pindul</h1>
        <hr>
        <h3>Manjakan mata Anda dengan keiindahan stalaktit dan stalagmit yang sudah ada di goa ini sejak ratusan tahun lalu. Ada juga stalaktit dan stalagmit yang menyatu, menjadi yang terbesar ke-4 di dunia.
        Lihatlah betapa kontrasnya air yang berwarna biru dengan dinding batu kapur kecokelatan, ditambah sentuhan hijaunya lumut dan tanaman paku yang terpapar cahaya matahari yang mengintip dari celah di langit-langit.
        </h3>
        </figcaption>
    </figure>
    
    <div id="projects" class="clearfix">
        <div class="room">
            <div class="row rooow">
                <div class="col-md-4 headerroom">
                    <p class="fa fa-calendar"><h3> 21 Mei 2017</h3></p>
                </div>
                <div class="col-md-4 headerroom">
                    <p class="fa fa-group"><h3> 1/5</h3></p>
                </div>
                <div class="col-md-4 headerroom">
                    <p class="fa fa-user"><h3> Kevin</h3></p>
                </div>
            </div>
            <div class="chat">
                <h1>Masukkan chat anda disini</h1>
                <!-- <div class="fb-comments" data-href="http://localhost/kasper/chatroom.php" data-numposts="5"></div> -->
                <!-- begin wwww.htmlcommentbox.com -->
                <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
                <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1494604533223");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
                <!-- end www.htmlcommentbox.com -->
            </div>
        </div>
        </div> <!-- end #projects -->
    </section>
    <!--
    End #Portfolio
    ========================== -->
    <?php
    require('footer.php');
    ?>
</body>
</html>