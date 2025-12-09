<?php
$systems = [
    ["name" => "V-COST", "logo" => "vcost.png", "url" => "http://online.toyotaotis.com.ph/newcost/login"],
    ["name" => "LTO SYSTEM", "logo" => "LTO.png", "url" => "http://online.toyotaotis.com.ph/lto/releases"],
    ["name" => "FATS", "logo" => "FATS.png", "url" => "http:///online.toyotaotis.com.ph/FATS/totadmin"],
    ["name" => "INVENTORY SYSTEM", "logo" => "qr.png", "url" => "http:///online.toyotaotis.com.ph/inv/inventory"],
    ["name" => "GATEPASS", "logo" => "GATEPASS.png", "url" => "http:///online.toyotaotis.com.ph/gatepass/gatepass"],
    ["name" => "WEBMAIL", "logo" => "webmail.png", "url" => "https://webmail.toyotaotis.com.ph"],
    ["name" => "C4C", "logo" => "C4C.png", "url" => "http://c4c.toyota.com.ph/"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="HOME.ico">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>HOME PAGE</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.js"></script>

    
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('facade.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 70px;
        }

        .navbar {
            background: rgba(255, 26, 26, 1);
            box-shadow: 0 4px 10px rgba(255, 255, 255, 1);
            border-bottom: 1px solid #fff;
            padding: 0.5rem 2rem;
            display: flex;
            justify-content: space-between;
            position: fixed;
            /* stays at the top */
            width: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            /* ensures it stays above all content */
        }


        .navbar-text {
            font-weight: 700;
            font-size: 1.8rem;
            color: #fff;
        }

        /* SYSTEM CONTAINER */
        .container {
            display: grid;
            grid-template-columns: repeat(1, auto);
            row-gap: 20px;
            padding-top: 150px;
            justify-content: flex-start;
            /* LEFT ALIGN */
            padding-left: .01px;
            /* Optional spacing */
        }


        .card {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            width: 100px;
            height: 80px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.2s;
            cursor: pointer;
            text-decoration: none;
        }

        .system-logo {
            height: 80%;
            /* Fill card vertically */
            max-height: 90px;
            /* Limit to avoid overflow */
            width: auto;
            object-fit: contain;
        }


        .card:hover {
            transform: scale(1.30);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md">
        <span class="navbar-text">HOME PAGE</span>
        <a class="navbar-brand">
            <img src="toywhite.png" alt="Logo" height="50">
        </a>
    </nav>

    <div class="container">
        <?php foreach ($systems as $sys): ?>
            <a class="card" href="<?= $sys['url']; ?>" target="_blank">
                <img class="system-logo" src="<?= $sys['logo']; ?>" alt="<?= $sys['name']; ?>">
            </a>
        <?php endforeach; ?>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</html>