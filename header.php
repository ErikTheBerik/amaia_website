<!DOCTYPE html>
<html>
<head>
    <title>Home | jabberbrain</title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/jb/js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">


  <nav class="navbar white-navbar navbar-expand-lg sticky-top">
    <div id="header-content" class="justify-content-center container-fluid">
      <div class="row" style="width: 80%;">
        <div class="col-4">
          <a class="navbar-brand" href="./">
            <img id="header_logo" src="assets/header_logo.webp" alt="">
          </a>
        </div>

        <div class="col-8">
          <ul class="navbar-nav mr-auto CenteredList" style="justify-content: flex-end;">
            <li class="nav-item">
              <a class="nav-link" id="inicio" href="./">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="coaching" href="./natural-language-interaction.php">Coaching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="mindfulness" href="./jabberbrain.php">Mindfulness</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="yoga" href="./contact-us.php">Yoga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="book" href="./contact-us.php">Book Online</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
    if (!selected)
      var selected = 'home';

    $('#' + selected).parent().addClass('active');
  </script>