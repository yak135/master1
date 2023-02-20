
<!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" type="text/css" href="git clone https://github.com/username/username.github.io">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </style>
</head>
<body onload="my()">
  <div id="loading">

  </div>
  <header class="header">
    <section class="navsection">
      <div class="logo">
        <h1>mr yaksh goyal</h1>
      </div>
      <nav>
        <a href="#">Home</a>
        <a href="https://www.youtube.com/channelUC3ZeMb8tlKO5rETK37ovq6g">Services</a>
        <a href="#soure">SourceCode</a>
        <a href="#about">About</a>
        <a href="co/index.php">Logout</a>



      </nav>






    </section>



    <main>
      <div class="leftside">

        <h3>Hello</h3>
        <h1> i am Yaksh Goyal</h1>
        <h2>web developer and youtuber</h2>
        <a href="#" class="btn1">hire me</a>
        <a href="co/index.php" class="btn2">contact me</a>

        
      </div>

      <div class="rightside">
        <img class="img" src="img/th.jpg">
        
      </div>
    </main>
  </header>
  <br />
  <!--te -->
  
  <?php include 'te.php'; ?>

    <!--te over -->
    <br />
  <!--Sourecode -->
  <?php include 'soure.php'; ?>
    <!--Sourecode over -->

    <br />
     <!--about -->
  <?php include 'about.php'; ?>
    <!--about over -->

    <br />
        
     <!--foo -->
  <?php include 'f.php'; ?>
    <!--foo over -->

    
     


 





<script>
  
  var preloader = document.getElementById('loading');

  function  my(){
    preloader.style.display = 'none';
  }

</script>
</body>
</html>