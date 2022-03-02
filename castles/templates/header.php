<head>
    <title>Schlösser in Deutschland</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/components/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<header class="holy-grail header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php"><img src="img/logo.png" alt="Logo" style="width:130px;"></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Schlossfinder<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="castleSearch.php#north">Norden</a></li>
                        <li><a href="castleSearch.php#south">Süden</a></li>
                        <li><a href="castleSearch.php#west">Westen</a></li>
                        <li><a href="castleSearch.php#east">Osten</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Magazin<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="magazin.php#news">News</a></li>
                        <li><a href="magazin.php#events">Events</a></li>
                        <li><a href="magazin.php#top10">Top 10</a></li>
                    </ul>
                </li>
                <li><a href="media.php">Media</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="castleSearch.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="suchtext" placeholder="Suche...">
                    <div class="input-group-btn">
                        <button class="btn btn-default" name="search" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Registrieren </a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Anmelden </a></li>
            </ul>
        </div>
    </nav>
</header>
