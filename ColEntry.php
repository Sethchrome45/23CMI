<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI ENTRY</title>
    <link rel="stylesheet" href="ColEntryCss.css">
    <link rel="stylesheet" href="CsMain.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&family=Nunito:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="ColJS.js"></script>
    


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
                <a href="COL.php" id="colMenu">COLUMBUS</a>
                <a href="#">DEFOREST</a>
                <a href="#">REPORTS</a>
                <a href="#">ABOUT</a>
            </div>
        </div>
    </div>


    <div id="Main-body">
        <div id="cyl-his">


        </div>
        <!--cyilinder history div-->


        <div id="Entry-form">
            <FORM action="ColEntry.php" method="POST" id="colForm">
                <div id="FormHeader">
                    <p id="ReceiveStatus">Sample not received</p>

                    <p id="Customer">
                         <?php echo $Customer; ?>
                    </p>

                    <p id="formulaNum">
                        <?php echo $formulaNum; ?>
                    </p>


                    <!--<input type="hidden" name="formulaNum" id="formNumHidded" value=" <?php echo $formulaNum; ?>">-->

                    <label for="spec" id="specName">SPEC</label>
                    <label for="JobNum" id="JobNumlb">JOB NO</label>
                    <label for="ColorName" id="ColorNamelb">COLOR</label>
                    <label for="FirstPull" id="FirstPulllb">First Pull</label>
                    <label for="NoRuns" id="NoRunslb">Runs</label>
                    <label for="ColReset" id="ColResetlb">Resets</label>



                    <input type="text" name="spec" value="<?php echo $SPEC; ?>" id="spec">
                    <input type="text" name="ColorName" value="<?php echo $ColorName; ?>" id="ColorName">
                    <input type="text" name="JobNum" value="<?php echo $JobNum; ?>" id="JobNum"><br><br>
                    <input type="" min="0" value="<?php echo $FirstPull; ?>" id="FirstPull" name="FirstPull">
                    <input type="" min="0" value="<?php echo $cmi_Runs; ?>" id="NoRuns" name="NoRuns">
                    <input type="" min="0" value="<?php echo $cmi_reset1;?>" id="ColReset">
                </div>
                <!--Form header div-->

                <div id="FormBody">
                    <!--<p id="TrackData">Tracking data</p>-->

                    <label for="Avg" id="Avglb">Avgs: 18m | 12m  |  6m |  3m</label>

                    <label for="RunDate" id="RunDatelb">Run Date:</label>

                    <input type="text" step="0.01" min="0" value="<?php echo $avgs;?>" id="Avg" name="Avg">

                    <input type="text" name="RunDate" value="<?php echo $RunDate; ?>" id="RunDate">
                    <label for="" name="site" id="site">COLUMBUS</label>

                    <p id="BarrelInv">Investigation</p>
                    <label for="" id="QClb">QC</label>
                    <label for="" id="Brllb">Barrel</label>
                    <label for="" id="Sumplb">Sump</label><br>

                    <label for="SendDE" name="SendDElb" id="SendDElb">Send DE</label>
                    <label for="BrlDE" name="BrlDElb" id="BrlDElb">DE</label>
                    <label for="BrlVis" name="BrlVislb" id="BrlVislb">Vis</label>
                    <label for="BrlV36" name="BrlV36lb" id="BrlV36lb">Vis-36</label>
                    <label for="SumpDE" name="SumpDElb" id="SumpDElb">DE</label>
                    <label for="SumpVis" name="SumpVislb" id="SumpVislb">Vis</label>
                    <label for="SumpV36" name="SumpV36lb" id="SumpV36lb">Vis-36</label>


                    <input type="" step="0.01" min="0" name="SendDE" id="SendDE">
                    <input type="" step="0.01" min="0" name="BrlDE" id="BrlDE">
                    <input type="" min="0" name="BrlVis" id="BrlVis">
                    <input type="" min="0" name="BrlV36" id="BrlV36">
                    <input type="" step="0.01" min="0" name="SumpDE" id="SumpDE">
                    <input type="" min="0" name="SumpVis" id="SumpVis">
                    <input type="" min="0" name="SumpV36" id="SumpV36">


                    <select name="presses" id="presses" required> 
                        <option value="blank" name="blank" disabled selected hidden id="pressselect">Select Press</option>
                        <option value="ROTO 1">Roto 1</option>
                        <option value="ROTO 2">Roto 2</option>
                        <option value="ROTO 4">Roto 4</option>
                        <option value="ROTO 6">Roto 6</option>
                        <option value="ROTO 7">Roto 7</option>
                        <option value="ROTO 8">Roto 8</option>
              
                    </select>
                    <br>

                    <label for="send_date" name="send_date" id="send_date_lb">Send date (ColorCert)</label>
                    <label for="batch_date" name="batch_date" id="batch_date_lb">Batch date</label>
                    <label for="cyl_no" name="cyl_no_lb" id="cyl_no_lb">Cyl #</label>
                    <label for="cyl_ftg" name="cyl_ftg_lb" id="cyl_ftg_lb">Cyl Ftg</label>
                    <label for="cyl_eng" name="cyl_eng_lb" id="cyl_eng_lb">Engraving (xxx/xx/xxx)</label><br>

                    <input type="date" style="font-size:0.88em" name="send_date" id="send_date">
                    <input type="date" style="font-size:0.88em" name="batch_date" id="batch_date">
                    <input type="text" name="cyl_no" placeholder="i-xxxx" id="cyl_no">
                    <input type="text" name="cyl_ftg" id="cyl_ftg">
                    <input type="text" name="cyl_eng" placeholder="xxx/xx/xxx" id="cyl_eng">`
                    <br>

                    <div id="categories"><br>
                        <select name="cata" id="cata">
                        <option selected="selected">Category A</option>
                            <?php
                                foreach($cata_result as $cata) { ?>
                                <option value="<?= $cata[0] ?>"><?= $cata[0] ?></option>
                            <?php
                                } ?>
                         </select>

                        <select name="catb" id="catb">
                                <option selected='selected'id="test1" >Select Category A first!</option>

                            </select>
                        <select name="FirstP" id="FirstP"> 
                        <option value="blank" name="blank" disabled selected hidden id="FirstPselect">First Pull</option>
                        <option value="strong">STRONG</option>
                        <option value="weak">WEAK</option>             
                        </select>

                        <label class="ResetSwitch">
                            <input type="checkbox" id="checkbox">
                            <span class="slider"></span>
                    </label>
                        <select name="tech" id="tech">
                        <option value="tech_name_blank" disabled selected hidden>Who made this ink?</option>
                        <?php
                                foreach($techs_result as $tech) { ?>
                                <option value="<?= $tech[0] ?>"><?= $tech[0] ?></option>
                            <?php
                                } ?>
                    </select>
                        <br>
                        <p for="comments" id="commentslb">Comments</p><br>
                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Fill in as much data as available, then add comments if needed!"></textarea><br>

                    </div>
                    <!--Entry form-->
                    <div id="ColButtons">
                        <button id="btnCancel" name="btnCancel" type="button"><a href="main.php" style="text-decoration:none">CANCEL</a></button>
                        <Button id="btnSkip" name="btnSkip" type="submit">SKIP</Button>
                        <Button id="btnSave" type="submit" name="btnSave" value="btnNotclicked">SAVE</Button>

                    </div>
                    <!--Col buttons-->
                    <div id="HistTable">
                        <p id="HistTablelb">HISTORICAL CMI DATA</p>
                        <table id="HistoryTable">
                            <tr id="tr1">
                                <th>Run Date</th>
                                <th>Spec</th>
                                <th>Cylinder</th>
                                <th>Engraving</th>
                                <th>Footage</th>
                                <th>First Pull</th>
                                <th>Problem Cat</th>
                                <th>Reset</th>
                            </tr>
                            <tr>
                            <?php foreach ($grab as $row) { ?>
                                
                                <?php echo '<tr><td>' . implode('</td><td>', $row) . '</td></tr>'; 
                                 
                                 }?>
                            </tr>




                        </table>

                        <div id="col-perf-container">
                            <p id="col-perf-lb">COLOR PERFROMANCE</p>
                            <div id="col-perf">

                            </div><!--color performance -->
                          
                        </div> <!--color performance container-->

                    </div><br><!--Table div-->
                    
                    <div id="AllRunsDiv">
                        <p id="AllRunsTablelb">ALL HISTORICAL RUNS</p>
                        <table id="AllRunsTable">
                            <tr id="tr1">
                                <th>SPEC</th>
                                <th>RUN DATE</th>
                                <th>DE</th>
                                <th>CUSTOMER</th>

                            </tr>
                            <tr id="ar2">
                            <?php foreach ($spec_h as $history) { ?>                           
                                <?php echo '<tr id = "trial" ><td>' . implode('</td><td>', $history) . '</td></tr>';
                                                       
                                                               
                                 }?>    
                                 
                                 
                            </tr>


                        </table>

                   
      



                    </div>
                    <!--All runs table-->

                    

                </div>
                <!--FORM body div-->
          
            </FORM>
        </div> <!--Entry form-->
    </div> <!--Main body-->

</body>
<footer>
<!--passing variables from php to jquery for now-->

<!--current week outlook charts-->
    <input type="hidden" id="currwk1DE" value="<?php echo $currwk1DE; ?>">
    <input type="hidden" id="currwk2DE" value="<?php echo $currwk2DE; ?>">
    <input type="hidden" id="currwk3DE" value="<?php echo $currwk3DE; ?>">
    <input type="hidden" id="currwkOv3" value="<?php echo $currwkOver3; ?>">
    <input type="hidden" id="currwkTotal" value="<?php echo $currwkTotal; ?>">
<!--categories data for this week-->
    <input type="hidden" id="colQc" name="colQc" value="<?php echo $colQc; ?>">
    <input type="hidden" id="colPress" value="<?php echo $colPress; ?>">
    <input type="hidden" id="colStandard" value="<?php echo $colStandard; ?>">
    <input type="hidden" id="colNoS" value="<?php echo $colNos; ?>">
    <input type="hidden" id="colTrial" value="<?php echo $colTrial; ?>">
    <input type="hidden" id="colCyl" value="<?php echo $colCyl; ?>">
    <input type="hidden" id="colProj" value="<?php echo $colProj; ?>">
    <input type="hidden" id="colOth" value="<?php echo $colOth; ?>">
<!--Cmi histry for specific color-->
    <input type="hidden" id="OneDEcmi" value="<?php echo $OneDEcmi; ?>">
    <input type="hidden" id="TwoDEcmi" value="<?php echo $TwoDEcmi; ?>">
    <input type="hidden" id="ThreeDEcmi" value="<?php echo $ThreeDEcmi; ?>">
    <input type="hidden" id="Over3cmi" value="<?php echo $Over3cmi; ?>">
    <input type="hidden" id="Totalcmi" value="<?php echo $Totalcmi; ?>">

    <input type="hidden" id="Received" value="<?php echo $RECEIVED; ?>">
    <input type="hidden" id="ID" value="<?php echo $ID; ?>">



</footer>
</html>