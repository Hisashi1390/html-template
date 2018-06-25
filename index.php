<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nozaki Test</title>
  <link rel="stylesheet" href="bower_components/normalize-css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <nav id="globalNav">
      <ul>
        <li class="home"><a href="">home</a></li>
        <li class="about"><a href="">about</a></li>
        <li class="contact"><a href="">contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- header -->


  <article id="main">
    <h1>MyCentOS</h1>

  </article>

  <aside id="aside">
    <nav id="sideNav">
      <ul>
        <li class="home"><a href="">home</a></li>
        <li class="about"><a href="">about</a></li>
        <li class="contact"><a href="">contact</a></li>
      </ul>
    </nav>
  </aside>

  <footer id="footer">
    <p>copylight</p>
  </footer>

</div>
<!-- wrapper -->

<script>
  $(function () {
    $("h1").css("color", "red");

  })
</script>

</body>
</html>
