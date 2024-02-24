<html>
<?php
include("headcopy.php");
?>
    <style>
      body
      {
        font-family: sans-serif;
      }
      h1
      {
        text-align: center;
        color: #777;
        margin: 30px 0 50px;
      }
      .gallery
      {
        margin: 10px 50px;
      }
      .gallery img{
        width: 230px;
        padding: 5px;
        filter: grayscale(100%);
        transition: 1s;
      }
      .gallery img:hover
      {
        filter: grayscale(0);
        transform: scale(1.1);
      }
    </style>
<body>

<!----------------------------Gallery------------------------>

<h2 style="text-align:center;"><b><big>GALLERY</big></b></h2></a>


<div class="gallery">
  <a href="img/a.jpg" data-lightbox="mygallery"><img src="img/a.jpg"></a>
  <a href="img/b.jpg" data-lightbox="mygallery"><img src="img/b.jpg"></a>
  <a href="img/c.jpg" data-lightbox="mygallery"><img src="img/c.jpg"></a>
  <a href="img/d.jpg" data-lightbox="mygallery"><img src="img/d.jpg"></a>
  <a href="img/e.jpg" data-lightbox="mygallery"><img src="img/e.jpg"></a>
  <a href="img/c.jpg" data-lightbox="mygallery"><img src="img/c.jpg"></a>
  <a href="img/b.jpg" data-lightbox="mygallery"><img src="img/b.jpg"></a>
  <a href="img/a.jpg" data-lightbox="mygallery"><img src="img/a.jpg"></a>
  <a href="img/d.jpg" data-lightbox="mygallery"><img src="img/d.jpg"></a>
  <a href="img/e.jpg" data-lightbox="mygallery"><img src="img/e.jpg"></a>
  <a href="img/c.jpg" data-lightbox="mygallery"><img src="img/c.jpg"></a>
  <a href="img/e.jpg" data-lightbox="mygallery"><img src="img/e.jpg"></a>
  <a href="img/b.jpg" data-lightbox="mygallery"><img src="img/b.jpg"></a>
  <br><br>
<a href="https://www.google.co.in/maps/uv?hl=en&pb=!1s0x3be7c7844f2030a3:0x553b3adfe6366e85!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOCwo3wJbYtglAz7KNu3en1wi8S01KJGXX5st8l%3Dw312-h176-k-no!5svatsalya+kanjurmarg+-+Google+Search&imagekey=!1e10!2sAF1QipOCwo3wJbYtglAz7KNu3en1wi8S01KJGXX5st8l&sa=X&ved=2ahUKEwiOgPWf6NrmAhUG4jgGHTVfD9oQoiowF3oECBsQBg&cshid=1577621303236488"><h5>See More Images</h5></a><br><br>
</div>

<!--------------Footer------------>

<?php
include("footer.php");
?>
</body>
</html>