<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/nav.css"/>
  <script src="../js/vendor/jquery-3.3.1.min.js"></script>
  <script src="../js/vendor/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GLPoulpi</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Vue personnelle</a></li>
      <li><a href="#">Vue groupe</a></li>
      <li><a href="#">Vue globale</a></li>
      <li><a href="#">Tous</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
          <div id="settings-button"> <!-- Bouton paramètres -->
            <a class="button-off.png" href="#"><img src="../img/button-off.png" alt="Se déconnecter"/></a>
          </div>
          <div id="settings-button"> <!-- Bouton paramètres -->
            <a class="settings-button.png" href="#"><img src="../img/settings-button.png" alt="Paramètres"/></a>
          </div>
        </div>
      </div>
    </form>
    <div class="nav navbar-nav navbar-right">

    <div id="dropdown">

      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Utilisateurs</a></li>
        <li><a href="#">Machines</a></li>
        <li><a href="#">Logiciels</a></li>
        <li><a href="#">Salles</a></li>
        <li><a href="#">Licences</a></li>
        <li><a href="#">Contrats</a></li>
        <li><a href="#">Tickets</a></li>
        <li><a href="#">Projets</a></li>
        <li><a href="#">Périphériques</a></li>
        <li><a href="#">Fournisseurs</a></li>
        <li><a href="#">Consommables</a></li>
      </ul>
    </div>
  </div>

  </div>



</nav>
</body>
</html>
