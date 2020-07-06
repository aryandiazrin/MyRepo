<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lombok Royal Property</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@0;1&family=Rubik&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </haead>

    <body id="LRP_Website" data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="pull-left"><img class ="test_logo"src="logo.jpg"></a> 
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="budaya_kerja.php">Budaya Kerja</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Container (header Section) -->
        <div id="test-section">
            <div class="test">
                <img class="test_image" src="foto kantor.jpg" alt="header image">
                <div class="centered">PROJECTS</div>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <h5>Kontak Kami</h5>
                        <p><span class="glyphicon glyphicon-phone"></span> : 6123813
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span> : myemail@something.com
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span> : (123)312321</p>
                    </div>
                    <div class="col-sm-4">
                        <h5>Alamat</h5>
                        <p>Mataram Barat, Selaparang, Mataram City, West Nusa Tenggara 83126</p>
                    </div>
                    <div class="col-sm-4">
                        <h5>Ikuti Kami</h5>
                        <p>
                            <span class="fa fa-facebook"></span>&nbsp;&nbsp;: PT. Lombok Royal Property
                            <br>
                            <span class="fa fa-twitter"></span>  : LombokRoyalProperty
                            <br>
                            <span class="fa fa-instagram"></span>  : LombokRoyalProperty.id
                            <br>
                            <span class="fa fa-youtube"></span>  : Lombok Royal Property
                        </p>
                    </div>
                </div>
            </div>      
        </div>

        
        
        <script>
            $('#myCarousel').carousel({
		        pause: 'none'
        	})

            $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
        </script>
    </body>
</html>