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

    <div id="main_body">
       
        <div id="Main-Splash">

        </div><!--body top div-->   
        <Header>
            <h1>
                COLOR MATCH RESEARCH
            </h1>
        </Header>
       
       

      <div class="navbar">
        <div class="dropdown">
            <div class="dropdown-content">
                <a href="Main.php" id="Dent">HOME</a>
                <a href="COL.php">COLUMBUS</a>
                <a href="DEF.php">DEFOREST</a>
                <a href="#">REPORTS</a>
                <a href="#">ABOUT</a>
            </div>
        </div>
      </div>


     
        <div class="Box-charts">
            <div id="col_overall">
                <p><i><?php echo 100 - $yr_curr ?>% of <?php echo $curr_ttl ?> runs under 3de. At and over 3de currently at <strong id="col_de_main"><?php echo $yr_curr ?>%</strong></i></p>
            </div> <!--Col overall, year to date de -->
            <DIV id="Col2022">
            </DIV><!--Col2022 div--> 
            <DIV id="def2022">
            </DIV>
            <!--def2022 div-->
            <div id="def_overall">
            <p><i><?php echo 100 - $yr_curr ?>% of <?php echo $curr_ttl ?> runs under 3de. At and over 3de currently at <strong id="col_de_main"><?php echo $yr_curr ?>%</strong></i></p>
            </div> <!--Col overall, year to date de -->
        </div>
         <!--Main splash div -->

          
       <div id="curr_iss">
            <div id="col_iss">
                <header>
                    <h2 id="col_title">
                        COLUMBUS <small>-<i><?php echo $coltrendTtl ?> colors</i> </small>
                    </h2>
                </header>
                <p>
                    &emsp; Trending issue so far this week is  <strong> <?php echo $CAT_A[0]; ?></strong>, currently at <strong><?php echo $COUNT[0]?></strong>%, with 
                    <i><?php echo $CAT_A[1] ?></i> following at <i><?php echo $COUNT[1] ?>%</i> Below is 
                    some more stuff i need to think about and reports i need to display bluh bluh bluh
                </p>
            </div>
            <div id="def_iss">
            <header>
                    <h2 id="def_title">
                        DEFOREST
                    </h2>
                </header>
                <P>
                    &emsp; Trending issue so far this week is  <strong> <?php echo $CAT_A[0]; ?></strong>, currently at <strong><?php echo $COUNT[0]?></strong>%, with 
                    <i><?php echo $CAT_A[1] ?></i> following at <i><?php echo $COUNT[1] ?>%</i> Below is 
                    some more stuff i need to think about and reports i need to display bluh bluh bluh
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
    <div id="footer_banner"></div><!--Footer banner div-->
<!--passing variables from php to jquery for now-->

<!--Year to date columbus-->
    <input type="hidden" id="colytd1DE" value="<?php echo $colytd1DE; ?>">
    <input type="hidden" id="colytd2DE" value="<?php echo $colytd2DE; ?>">
    <input type="hidden" id="colytd3DE" value="<?php echo $colytd3DE; ?>">
    <input type="hidden" id="colytdOver3DE" value="<?php echo $colytdOver3DE; ?>">


<!--Year to date deforest-->
    <input type="hidden" id="defytd1DE" value="<?php echo $dfytd1DE; ?>">
    <input type="hidden" id="defytd2DE" value="<?php echo $dfytd2DE; ?>">
    <input type="hidden" id="defytd3DE" value="<?php echo $dfytd3DE; ?>">
    <input type="hidden" id="defytdOver3DE" value="<?php echo $dfytdOver3DE; ?>">

</footer>
</html>