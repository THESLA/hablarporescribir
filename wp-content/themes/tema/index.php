<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="http://localhost/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/bower_components/css/styles.css">

    <title>MI WEB</title>
</head>
<body class="container">



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">HablarXEscribir</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
    <hr class="half-rule">
<!-- aqui termina el menu top --> 
<div class="jumbotron text-center">
  <h1>HablarXescribir</h1> 
  <p>We specialize in blablabla</p> 
</div>
<!-- aqui el titulo top --> 
<div class="bs-docs-featurette">
  <div class="container">

    <h2>What our customers say</h2>
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
    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
    </div>
    <div class="item">
      <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
    </div>
    <div class="item">
      <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
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
<!-- testos en movimiento -->


    <h2 class="bs-docs-featurette-title">Esta es mi pagina de prueba.</h2>
    <p class="lead">con esto intentomontar una web basada en boostramp fasil,sencilla pero muy dinamica y responsive.</p>



    <hr class="half-rule">
    <div class="row">
      <div class="col-sm-4">
        <h3>Preprocessors</h3>
        <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS preprocessors, <a href="../css/#less">Less</a> and <a href="../css/#sass">Sass</a>. Quickly get started with precompiled CSS or build on the source.</p>
      </div>
      <div class="col-sm-4">
        <h3>One framework, every device.</h3>
        <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p>
      </div>
      <div class="col-sm-4">
        <h3>Full of features</h3>
        <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p>
      </div>
    </div>

    <hr class="half-rule">
  </div>
</div>

<div class="bs-docs-featurette">
  <div class="container">
    <h2 class="bs-docs-featurette-title">Built with Bootstrap.</h2>
    <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on your own with our growing <a href="../getting-started/#examples">collection of examples</a> or by exploring some of our favorites.</p>


    <hr class="half-rule">

    <p class="lead">We showcase dozens of inspiring projects built with Bootstrap on the Bootstrap Expo.</p>
    <a class="btn btn-outline btn-lg">Explore the Expo</a>
  </div>
</div>
<!-- prueva -->
<button class="btn btn-default" onclick="descarga()">Generate CSV</button>

<script>
function descarga(){

        var data = [
            [1, "Jonatan", 25, "Gothenburg"],
            [2, "Simon", 23, "Gothenburg"],
            [3, "Hanna", 21, "Stockholm"]
        ];
var csvContent = '';
data.forEach(function (infoArray, index) {
  dataString = infoArray.join(';');
  csvContent += index < data.length ? dataString + '\n' : dataString;
});

var download = function(content, fileName, mimeType) {
  var a = document.createElement('a');
  mimeType = mimeType || 'application/octet-stream';

  if (navigator.msSaveBlob) { // IE10
    return navigator.msSaveBlob(new Blob([content], { type: mimeType }), fileName);
  } else if ('download' in a) { //html5 A[download]
    a.href = 'data:' + mimeType + ',' + encodeURIComponent(content);
    a.setAttribute('download', fileName);
    document.body.appendChild(a);
    setTimeout(function() {
      a.click();
      document.body.removeChild(a);
    }, 66);
    return true;
  } else { //do iframe dataURL download (old ch+FF):
    var f = document.createElement('iframe');
    document.body.appendChild(f);
    f.src = 'data:' + mimeType + ',' + encodeURIComponent(content);

    setTimeout(function() {
      document.body.removeChild(f);
    }, 333);
    return true;
  }
}

download(csvContent, 'csv file.csv', 'text/csv');
}
</script>


<button class="btn btn-default" onclick="generate()">Generate pdf</button>
<script>
    function generate() {
        var columns = ["ID", "Name", "Age", "City"];
        var data = [
            [1, "Jonatan", 25, "Gothenburg"],
            [2, "Simon", 23, "Gothenburg"],
            [3, "Hanna", 21, "Stockholm"]
        ];

        var doc = new jsPDF('p', 'pt');
        doc.autoTable(columns, data);
        doc.save("table.pdf");
    }
</script>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p class="text-center">Derechos Reservados <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2016 Tecnico@Codigo0.net</p></p> 
</footer>

 <footer class="color4">
        <div class="container" id="footer"><br>
                
            </br></div>
    </footer>


 <!-- bower includes-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://localhost/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
 <script src="http://localhost/bower_components/jspdf/dist/jspdf.min.js"></script>
 <script src="http://localhost/bower_components/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>  




</body>
</html>