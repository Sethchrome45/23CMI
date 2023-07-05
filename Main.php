<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI OUTLOOK</title>
    <link rel="stylesheet" href="CsMain.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JSMain.js"></script>
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
                <a href="#home" id="Dent">HOME</a>
                <a href="COL.php">COLUMBUS</a>
                <a href="#">DEFOREST</a>
                <a href="#">REPORTS</a>
                <a href="#">ABOUT</a>
            </div>
        </div>
    </div>


    <div id="Main-body">
        <div class="Box-charts">
            <DIV id="Col2022">
            </DIV>
            <!--Col2022 div-->
            <DIV id="def2022">
            </DIV>
            <!--def2022 div-->
        </div>
        <!--box charts div-->

        <div class="Past_charts">
            <div id="col_y4">
            </div>
            <div id="col_y3">
            </div>
            <div id="col_y2">
            </div>
            <div id="col_y1">
            </div>
            <div id="def_y1">
            </div>
            <div id="def_y2">
            </div>
        </div>
        <!--past charts dive>-->

       <div id="curr_iss">
            <div id="col_iss">
                <header>
                    <h2>
                        COLUMBUS
                    </h2>
                </header>
                <P>
                    &emsp; Code to display on-going activity, maybe include year in history or week in history.
                </P>
                <p>
                    The trending issue for this week is ..... from php... Also pay attention to .... from php....
                </p>
            </div>
            <div id="def_iss">
            <header>
                    <h2>
                        DEFOREST
                    </h2>
                </header>
                <P>
                    &emsp; Code to display on-going activity, maybe include year in history or week in history.
                </P>
                <p>
                    The trending issue for this week is .........from php .....
                </p>
            </div>
        </div>
        <!--Current issues ongoing for this week-->


    </div>
    <!--Main body div-->

</body>
<footer>
<!--passing variables from php to jquery for now-->

<!--Year to date columbus-->
    <input type="hidden" id="colytd1DE" value="<?php echo $colytd1DE; ?>">
    <input type="hidden" id="colytd2DE" value="<?php echo $colytd2DE; ?>">
    <input type="hidden" id="colytd3DE" value="<?php echo $colytd3DE; ?>">
    <input type="hidden" id="colytdOver3DE" value="<?php echo $colytdOver3DE; ?>">


<!--Year to date deforest-->
<input type="hidden" id="defytd1DE" value="<?php echo $defytd1DE; ?>">
    <input type="hidden" id="defytd2DE" value="<?php echo $defytd2DE; ?>">
    <input type="hidden" id="defytd3DE" value="<?php echo $defytd3DE; ?>">
    <input type="hidden" id="defytdOver3DE" value="<?php echo $defytdOver3DE; ?>">

</footer>
</html>