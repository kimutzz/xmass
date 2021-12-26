<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   
   .compartilhe {
   /*position: fixed;*/
   width: 100%;
   bottom: 5;
   text-align: center;
   z-index: 99999;
   /*background: white;*/
   }
   .fa {
   padding: 15px;
   font-size: 16px!important;
   width: 15%;
   text-decoration: none;
   }
   .fa:hover {
   opacity: 0.8;
   }
   .fa-facebook {
   background: rgb(59, 89, 152);
   color: white!important;}
   .fa-whatsapp {
   background: rgb(77, 194, 71);
   color: white!important;
   }
   .fa-twitter {
   background: rgb(29, 161, 242);
   color: white!important;
   }
   .fa-telegram {
   background: rgb(0, 136, 204);
   color: white!important;
   }
   .fa-copy {
   background: black;
   color: white!important;
   }
</style>
  
  <title>Merry X-mas</title>
   
</head>
<body background="bg.png">

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
    }

    else{
      header('location:index.html');
    }
    
    ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3391752349833352"
     crossorigin="anonymous"></script>
<!-- xmass -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3391752349833352"
     data-ad-slot="5847485834"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

  <div class="card">
  <img src="./birthday.png" alt="birthday" class="birthday">
    <div class="text">
      
      <h1> <?php echo $name;?><br /> Wishes you a <br /> Merry Christmas</h1>
      <p>I hope you have a wonderful day</p>
      <p class="muted"></p>
      <div class="space"></div>
    </div>
    
  </div>
  
  <div class="compartilhe">
<!-- MARGIN-TOP: -9999... MAKE THE TEXTAREA OUT OF SCREEN -->
<!--textarea rows="1" cols="30" style="width: 0px; height: 0px;margin-top: -99999999px;;" id="url"></textarea-->
<p>Share</p>
<a href="#" target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=&amp;text=' + encodeURIComponent(document.URL) + '&amp;quote=' + encodeURIComponent(document.URL)); return false;" id="whatsapp" class="fa fa-whatsapp"></a>

<a href="javascript:Copy();" type="button&quot;" style="background:#000" class="fa" data-wpel-link="internal"><i class="fa-copy"></i></a>

<a href="#" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&amp;quote=' + encodeURIComponent(document.URL)); return false;" class="fa fa-facebook"></a>

<a href="#" target="_blank" onclick="window.open('https://telegram.me/share/url?url=' + encodeURIComponent(document.URL) + '&amp;quote=' + encodeURIComponent(document.URL)); return false;" class="fa fa-telegram"></a>


<a href="#" target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.URL) + '&amp;quote=' + encodeURIComponent(document.URL)); return false;" class="fa fa-twitter"></a>

<script>
function Copy() {
  var Url = document.getElementById("url");
  Url.innerHTML = window.location.href;
  console.log(Url.innerHTML)
  Url.select();
    alert("Success!");
    document.execCommand("copy");
}
</script>
</div>
<button><a href="index.html">MAKE YOUR OWN</a></button>
<div class="space"></div>
</body>
</html>