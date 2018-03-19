<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLPoulpi</title>
    <link rel="stylesheet" href="assets/css/bootstrap2.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome2.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <div></div>
    <div class="card">
        <div class="card-header">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="index.php">GLPoulpi</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="parc.php">Parc</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="assistance.php">Assistance</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="gestion.php">Gestion</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="outils.php">Outils</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="administration.php">Administration</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="configuration.php">Configuration</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                        </form>
                        <a class="btn btn-light action-button" role="button" href="preferences.php">Préférences</a>
                        <a class="btn btn-light action-button" role="button" href="deconnexion.php">Deconnexion</a></div>
                </div>
            </nav>
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#item-1-1" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true">Vue personnelle</a></li>
                <li class="nav-item"><a class="nav-link" href="#item-1-2" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false">Vue groupe</a></li>
                <li class="nav-item"><a class="nav-link" href="#item-1-3" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false">Vue globale</a></li>
                <li class="nav-item"><a class="nav-link" href="#item-1-5" id="item-1-5-tab" data-toggle="tab" role="tab" aria-controls="item-1-5" aria-selected="false">Tous</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div id="nav-tabContent" class="tab-content">
                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                    <h4>Vue personnelle</h4>
                    <p>A completer</p>
                </div>
                <div
                    id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                    <h4>Vue groupe</h4>
                    <p>A completer</p>
                </div>
                <div
                    id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                    <h4>Vue globale</h4>
                    <p>A completer</p>
                </div>
                <div
                    id="item-1-5" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-5-tab">
                    <h4>Tous</h4>
                    <p>A completer</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery2.min.js"></script>
<<<<<<< HEAD
    <script src="assets/js/bootstrap2.min.js"></script>
    <?php include 'footer.php'; ?>
=======
    <script src="assets/bootstrap/js/bootstrap2.min.js"></script>
    
    <?php include '../footer.php'; ?>
>>>>>>> c0c5e48dd844293a9e72a07e718b282d7c8d40c5
</body>

</html>
