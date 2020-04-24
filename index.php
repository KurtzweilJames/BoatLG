<?php
include "api.php";
$i = "/assets/limits/".$l.".svg"; 
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Geneva Lake Boating Guide</title>
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127164289-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-#########-1');

    </script>

    <!-- Favicons/Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/site.webmanifest">
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#3c8aff">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/assets/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <!-- Navigation -->
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
                <img src="/assets/geneva.svg" height="26">
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#speed">Speed Limits</a>
            <a class="py-2 d-none d-md-inline-block" href="#age">Age Limits</a>
            <a class="py-2 d-none d-md-inline-block" href="#contacts">Contacts</a>
            <a class="py-2 d-none d-md-inline-block" href="#buoys">Buoys</a>
            <a class="py-2 d-none d-md-inline-block" href="#swimming">Swimming</a>
            <a class="py-2 d-none d-md-inline-block" href="#emergencies">Emergencies</a>
            <a class="py-2 d-none d-md-inline-block" href="#weather">Weather</a>
        </div>
    </nav>

    <!-- Header -->
    <div class="lg-header">
        <div class="speed-limit">
            <h3 class="text-light text-center">Current Speed Limit</h3>
            <img src="<?php echo $i?>" height="200">
        </div>
    </div>

    <!-- Information -->
    <div class="container">
        <h1 class="lgfont text-center" style="font-size:56px">Geneva Lake Boating Guide</h1>
        <?php
    if ($a == null) {
    } else {
    echo "<div class='alert alert-info text-center' role='alert'>";
    echo $a;
    echo "</div>"; }
        ?>
    </div>
    <!-- Speed Limits NEW -->
    <div class="container">
        <h1 id="speed" class="lgfont">Speed Limits</h1>
        <div class="table-responsive">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">S</th>
                        <th scope="col">M</th>
                        <th scope="col">T</th>
                        <th scope="col">W</th>
                        <th scope="col">T</th>
                        <th scope="col">F</th>
                        <th scope="col">S</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Sunrise-12pm</th>
                        <td class="table-info">35</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-info">35</td>
                    </tr>
                    <tr>
                        <th scope="row">12pm-Sunset</th>
                        <td class="table-info">35</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-danger">45</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                    </tr>
                    <tr>
                        <th scope="row">Sunset-Sunrise</th>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                        <td class="table-warning">15</td>
                    </tr>
                    <tr>
                        <th scope="row">Holidays</th>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                        <td class="table-info">35</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center">Holidays include July 3-5, Memorial Day, and Labor Day</p>
    </div>

    <!-- Age Limits -->
    <div class="container">
        <h1 id="age" class="lgfont">Age Limits</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header">Boats</h5>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Under 10</td>
                                <td>May <u>not</u> drive</td>
                            </tr>
                            <tr>
                                <td>10-15</td>
                                <td>Adult required</td>
                            </tr>
                            <tr>
                                <td>12+</td>
                                <td><u>Boating</u> license required*</td>
                            </tr>
                        </table>
                        <p class="text-center">*There is an exception that those born <i>before</i> January 1, 1989 do not need a boating license</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header">PWCs</h5>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Under 12</td>
                                <td>May <u>not</u> drive</td>
                            </tr>
                            <tr>
                                <td>12+</td>
                                <td><u>Boating</u> license required*</td>
                            </tr>
                        </table>
                        <p class="text-center">*There is an exception that those born <i>before</i> January 1, 1989 do not need a boating license</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacts -->
    <div class="container">
        <h1 id="contacts" class="lgfont">Important Contacts</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center">
                    <h5 class="card-header">Water Safety Patrol</h5>
                    <div class="card-body">
                        <h5 class="card-title">Medical Emergencies and Boating Assistance</h5>
                        <a href="http://watersafetypatrol.org" class="btn btn-primary"><i class="fas fa-globe"></i> Website</a>
                        <a href="tel:2622456577" class="btn btn-primary"><i class="fas fa-phone"></i> Call</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <h5 class="card-header">Geneva Lake Law Enforcement</h5>
                    <div class="card-body">
                        <h5 class="card-title">Law Enforcement/Police</h5>
                        <a href="http://www.genevalakepolice.com/" class="btn btn-primary"><i class="fas fa-globe"></i> Website</a>
                        <a href="tel:2622459824" class="btn btn-primary"><i class="fas fa-phone"></i> Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buoys -->
    <div class="container">
        <h1 id="buoys" class="lgfont">Buoys</h1>
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <img class="card-img-top" src="/assets/buoys/Controlled.svg">
                    <h5 class="card-header">Controlled Area</h5>
                    <p class="card-text"><b>Laws</b></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Examples:</b></li>
                        <li class="list-group-item">Slow No Wake</li>
                        <li class="list-group-item">Speed Limits</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img class="card-img-top" src="/assets/buoys/Information.svg">
                    <h5 class="card-header">Information</h5>
                    <p class="card-text"><b>Directions and Information</b></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Examples:</b></li>
                        <li class="list-group-item">Gas Station</li>
                        <li class="list-group-item">Marina Entrance</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img class="card-img-top" src="/assets/buoys/Keep Out.svg">
                    <h5 class="card-header">Keep Out</h5>
                    <p class="card-text"><b>Do Not Enter</b></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Examples:</b></li>
                        <li class="list-group-item">Firework Barge</li>
                        <li class="list-group-item">No Entry</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img class="card-img-top" src="/assets/buoys/Warning.svg">
                    <h5 class="card-header">Warning</h5>
                    <p class="card-text"><b>The marked area requires caution.</b></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Examples:</b></li>
                        <li class="list-group-item">Danger Area</li>
                        <li class="list-group-item">Shallow Water</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Swimming -->
    <div class="container">
        <h1 id="swimming" class="lgfont">Swimming</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Swimming</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ALLOWED when boat is anchored or manned</li>
                        <li class="list-group-item">Swimmers must remain within 50 feet of boat</li>
                        <li class="list-group-item">Swimming in traffic lane only allowed when manned</li>
                        <li class="list-group-item">Swimming is only allowed sunrise to sunset</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">SCUBA Diving</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Divers must register with the Water Saftey Patrol</li>
                        <li class="list-group-item">Minimum of Two Divers in the water</li>
                        <li class="list-group-item">Boats must be manned, anchored, and have diver's flag</li>
                        <li class="list-group-item">No diving in the bays between May 15 and September 15</li>
                        <li class="list-group-item">Diving is only allowed in daytime</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergencies -->
    <!--<div class="container">
        <h1 id="emergencies" class="lgfont">Boating Emergencies</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Swamping/Capsizing
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Put on a life jacket</li>
                            <li>Run pumps in the boat and try to remove water</li>
                            <li>If overweight, remove load</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Swamping/Capsizing
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Put on a life jacket</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Weather -->
    <div class="container">
        <h1 id="weather" class="lgfont">Weather</h1>
        <ul class="list-group">
            <li class="list-group-item">Current Speed Limit:
                <?php echo $l; ?> mph
            </li>
        </ul>
        <script type='text/javascript' src='https://darksky.net/widget/default/42.5684,-88.4808/us12/en.js?width=100%&height=350&title=Geneva Lake&textColor=212529&bgColor=transparent&transparency=true&skyColor=undefined&fontFamily=Default&customFont=&units=us&htColor=212529&ltColor=C7C7C7&displaySum=yes&displayHeader=yes'></script>
    </div>
    <!-- Footer -->
    <footer class="lg-footer">
        <p>Created by <a href="https://jameskurtzweil.com">James Kurtzweil 2020</a></p>
        <p>
            The information provided on this page is provided for educational purposes only. Please do not use this information for legal information. Use the resources below for official information.
        </p>
        <p>
            <a href="http://www.genevalakepolice.com/resource-doc/LAKE%20ORD%20Flyer%202018.pdf">Geneva Lake Ordinances</a> ///
            <a href="https://dnr.wi.gov/files/pdf/pubs/le/le0301.pdf">Wisconsin DNR</a>
        </p>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="/assets/88x31.png" /></a>
    </footer>
</body>

</html>
