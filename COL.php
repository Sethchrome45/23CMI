<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI OUTLOOK</title>
    <link rel="stylesheet" href="CsMain.css">
    <link rel="stylesheet" href="Col.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ColJS.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body>

    <?php include "connect.php"; ?>
    <?php include "phpfunct.php"; ?>
    <div id="Main-Splash">
        <Header>
            <h1>
                FLINT GROUP COLOR MATCHING
            </h1>
        </Header>
    </div>
    <!--Main splash div -->
    <div class="navbar">
        <div class="dropdown">
            <div class="dropdown-content">
                <a href="Main.php" id="Dent">HOME</a>
                <a href="#COL.php">COLUMBUS</a>
                <a href="#">DEFOREST</a>
                <a href="#">REPORTS</a>
                <a href="#" id="DentEnd">ABOUT</a>
            </div>
        </div>
    </div>


    <div id="Main-body">
        <div id="welcome">
            Welcome to Columbus!
        </div>
        <div id="Col-charts">
            <div id="Col-DE">
            </div><!--Col-DE div-->
            <div id="Col-prob">
            </div><!--Col-prob div-->
            <div id="Col-DELW">
            </div><!--Col-DE div-->
            <div id="Col-probLW">
            </div><!--Col-prob div-->
        </div><!--Col-charts div-->
        
        <div id="col-buttons">
            <BUTton id="Col-entry" onclick="window.location='ColEntry.php'">CMI ENTRY</BUTton>
            <BUTton id="Col-report">REPORTS</BUTton>
        </div>
        <!--Columbus buttons-->
    </div>
    <!--Main body div-->

</body>
<footer>
    
<!--passing variables from php to jquery for now-->
<!--current week outlook charts-->
    <input type="hidden" id="currwk1DE" value=<?php echo $currwk1DE; ?>">
    <input type="hidden" id="currwk2DE" value="<?php echo $currwk2DE; ?>">
    <input type="hidden" id="currwk3DE" value="<?php echo $currwk3DE; ?>">
    <input type="hidden" id="currwkOv3" value="<?php echo $currwkOver3; ?>">
    <input type="hidden" id="currwkTotal" value="<?php echo $currwkTotal; ?>">
<!--categories data for this week-->
    <input type="hidden" id="colQc" name="colQc" value=<?php echo $colQcLW; ?>">
    <input type="hidden" id="colPress" value="<?php echo $colPress; ?>">
    <input type="hidden" id="colStandard" value="<?php echo $colStandard; ?>">
    <input type="hidden" id="colNoS" value="<?php echo $colNos; ?>">
    <input type="hidden" id="colTrial" value="<?php echo $colTrial; ?>">
    <input type="hidden" id="colCyl" value="<?php echo $colCyl; ?>">
    <input type="hidden" id="colProj" value="<?php echo $colProj; ?>">
    <input type="hidden" id="colOth" value="<?php echo $colOth; ?>">

<!--last week outlook charts-->
    <input type="hidden" id="OneDELW" value=<?php echo $OneDELW; ?>">
    <input type="hidden" id="TwpDELW" value="<?php echo $TwoDELW; ?>">
    <input type="hidden" id="ThreeDELW" value="<?php echo $ThreeDELW; ?>">
    <input type="hidden" id="Over3" value="<?php echo $Over3LW; ?>">
    <input type="hidden" id="TotalLW" value="<?php echo $TotalLW; ?>">
<!--categories data for last week-->
    <input type="hidden" id="colQc" name="colQc" value=<?php echo $colQcLW; ?>">
    <input type="hidden" id="colPress" value="<?php echo $colPressLW; ?>">
    <input type="hidden" id="colStandard" value="<?php echo $colStandardLW; ?>">
    <input type="hidden" id="colNoS" value="<?php echo $colNosLW; ?>">
    <input type="hidden" id="colTrial" value="<?php echo $colTrialLW; ?>">
    <input type="hidden" id="colCyl" value="<?php echo $colCylLW; ?>">
    <input type="hidden" id="colProj" value="<?php echo $colProjLW; ?>">
    <input type="hidden" id="colOth" value="<?php echo $colOthLW; ?>">




</footer>
</html>