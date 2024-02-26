<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1003%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(171%2c 171%2c 171%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c554.057C107.152%2c553.061%2c222.094%2c542.349%2c304.614%2c473.989C384.423%2c407.875%2c402.741%2c296.566%2c431.143%2c196.897C455.78%2c110.441%2c463.583%2c23.834%2c458.469%2c-65.918C452.917%2c-163.341%2c472.783%2c-281.563%2c400.165%2c-346.745C326.517%2c-412.852%2c205.501%2c-348.633%2c110.948%2c-377.855C14.216%2c-407.75%2c-50.777%2c-522.104%2c-151.912%2c-517.364C-255.23%2c-512.522%2c-356.969%2c-443.5%2c-408.001%2c-353.535C-457.412%2c-266.428%2c-392.297%2c-157.436%2c-411.799%2c-59.208C-433.025%2c47.701%2c-546.438%2c133.12%2c-525.875%2c240.159C-505.104%2c348.281%2c-402.813%2c423.255%2c-308.275%2c479.685C-215.633%2c534.984%2c-107.886%2c555.06%2c0%2c554.057' fill='%23898989'%3e%3c/path%3e%3cpath d='M1440 1030.44C1526.577 1031.92 1585.794 947.018 1658.982 900.7429999999999 1732.835 854.047 1824.228 830.448 1872.0059999999999 757.2909999999999 1922.7939999999999 679.525 1958.701 577.344 1927.272 489.94100000000003 1896.099 403.249 1784.618 382.129 1715.288 321.461 1658.121 271.436 1626.731 192.67000000000002 1555.974 165.02999999999997 1482.835 136.45999999999998 1401.601 150.88799999999998 1325.219 169.08999999999997 1245.537 188.07799999999997 1166.079 214.62900000000002 1107.511 271.896 1046.221 331.826 1002.454 410.496 991.3969999999999 495.501 980.413 579.95 1003.446 666.253 1046.673 739.626 1087.433 808.811 1161.211 845.597 1225.778 893.336 1295.357 944.781 1353.481 1028.961 1440 1030.44' fill='%23cdcdcd'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1003'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-size:cover;
            background-position:center;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            font-weight: 500
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding-left: 20px;
            padding-right: 20px;
        }

        .alert {
            max-width: 270px;
            margin-left: auto;
            margin-right: auto;
        }

        input {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }


        @keyframes buttonHover {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .card-header {
            font-size: 25px;
            font-weight: bold
        }
        
        .card-body{
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }
    </style>
    <title><?php if (isset($title)) {
                echo $title;
            } ?></title>
</head>

<body>
    <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="nav-link active text-light" href="/" aria-current="page">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="livraison">Livraison</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light color-warning:hover" href="recherche">Recherche</a>
        </li>
        <?php
        // si la session user est démarré
        if (isset($_SESSION['user'])) { ?>
            <!-- alors on affiche le bouton logout -->
            <li class="nav-item">
                <a class="btn btn-light" href="logout">Logout</a>
            </li>
        <?php
        } else { ?>
            <!-- sinon on affiche le bouton login -->
            <li class="nav-item">
                <a class="btn btn-light" href="login">Login</a>
            </li>
        <?php
        } ?>
    </ul>