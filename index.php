<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Drunk Authors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Drunk Authors</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#select">SELECT</a></li>
        <li><a href="#portfolio">EXAMPLES</a></li>
		<li><a href="#about">HOW IT WORKS</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Drunk <span class="fire">Authors</span></h1> 
  <p>Famous Authors Reimagined... Drunk</p>
</div>

<!-- Container (About Section) -->
<div id="select" class="container-fluid">
  <div class="row">
    <div class="col-sm-12 text-center">
    <div class="left">
    <h2>Select An Author</h2>
    <form method="post" name="markov" id="markov">
            <input name="text" type="radio" value="Charles Dickens" onclick="send()" checked> Charles Dickens <br />
            <input name="text" type="radio" value="Emily Bronte" onclick="send()"> Emily Bronte <br />
            <input name="text" type="radio" value="Charlotte Bronte" onclick="send()"> Charlotte Bronte <br />
            <input name="text" type="radio" value="Mark Twain" onclick="send()"> Mark Twain <br />
            <input name="text" type="radio" value="Aristotle" onclick="send()" > Aristotle <br />
            <input name="text" type="radio" value="Jane Austen" onclick="send()"> Jane Austen <br />
            <input name="text" type="radio" value="Plato" onclick="send()"> Plato <br />
            <input name="text" type="radio" value="Peter Coffey" onclick="send()"> Peter Coffey
        <br />
	</form>
    </div>
<hr />
    <h2>See the output!</h2>
<div id="out"></div>
<hr />
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Example Drunk Quotes</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"I can't imagined to be intimacy with his from her coming that touch him? I mutual foes. The idiot!"<br><span style="font-style:normal;">-Drunk Emily Bronte</span></h4>
      </div>
      <div class="item">
        <h4>"Of course. I know seem to. The man find out the naked crest."<br><span style="font-style:normal;">-Drunk Mark Twain</span></h4>
      </div>
      <div class="item">
        <h4>"That is small--the eyes is there is a sort of vessels? Yes; and in your work."<br><span style="font-style:normal;">-Drunk Plato</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">

      <h2>How It Works</h2><br>
      <h4>This site sources the authors' books to generate <a href="https://en.wikipedia.org/wiki/Markov_chain">markov chains</a> that are 			used to generate several sentences, using a random word as a starting point.</h4><br>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><a href="http://hackarizona.org">Hack Arizona 2016</a></p>
</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

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

<script>
send();
function send() {
  
      document.getElementById("out").innerHTML = "Loading...";
  var form = document.getElementById('markov');
  var formData = new FormData(form);

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
	  response = xhttp.responseText;
      document.getElementById("out").innerHTML = response;
    }
  };
  xhttp.open("POST", "out.php", true);
  xhttp.send(formData);

}
</script>

</body>
</html>
