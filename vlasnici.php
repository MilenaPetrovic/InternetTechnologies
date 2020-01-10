<html>

<head>
    <title>Tapkanje.rs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/exchange.png" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />


    <script src="DataTables-1.10.4/media/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
    <script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>

    <script src="DataTables-1.10.4/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="DataTables-1.10.4/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="bs/css/bootstrap-theme.min.css">
    <script src="bs/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".tabela").DataTable({
                "columns": [{
                        "title": "RB"
                    },
                    {
                        "title": "Ime"
                    },
                    {
                        "title": "Prezime"
                    },
                    {
                        "title": "Kontakt"
                    }
                ],
                "ajax": "server_obrada.php",
                "processing": true,
                "serverSide": true
            });
        });
    </script>

</head>

<body>

    <!-- Header section -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <!-- logo -->
            <div class="site-logo">
                <h3>Tapkanje.rs</p>
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <ul class="main-menu">
                <li><a href="index.php">Početna</a></li>
                <li><a href="razmena.php">Razmena</a></li>
                <li><a href="kolekcionari.php">Kolekcionari</a></li>				
				<li><a href="vlasnici.php">Vlasnici</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->

    <!-- Page Info -->
    <div class="page-info-section page-info-big">
        <div class="container">
            <h2>Vlasnici</h2>
            <div class="site-breadcrumb">
                <a href="index.php">Početna</a> /
                <span>Vlasnici</span>
            </div>
        </div>
    </div>
    <!-- Page Info end -->

    <div class="page-area categorie-page spad">
        <div class="container">

            <table class="tabela hover">
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p class="copyright">
            &copy; Copyright Tapkanje.rs | tapkanje.rs@gmail.com</a>
        </p>
    </div>
</footer>
<!-- Footer kraj -->

</html>