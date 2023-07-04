<?php include "connect.php" ?>

<?php


 
    if(isset($_POST['formulaNumaa'])){
        $action=$_POST['formulaNum'];

        
        switch($action){
                case 'save':
                    $data ="'". $_POST['formulaNum']. "'";
                    $spec = "'". $_POST['spec']. "'";
                    $ID = "'". $_POST['ID']. "'";
                    $ColorName = "'". $_POST['ColorName']. "'";
                    $JobNum = "'". $_POST['JobNum']. "'";
                    $FirstPull = $_POST['FirstPull'];
                    $RunDate = $_POST['RunDate'];
                    $SendDE = $_POST['SendDE'];
                    $BrlDE = $_POST['BrlDE'];
                    $BrlVis = $_POST['BrlVis'];
                    $BrlV36 = $_POST['BrlV36'];
                    $SumpDE = $_POST['SumpDE'];
                    $SumpVis = $_POST['SumpVis'];
                    $SumpV36 = $_POST['SumpV36'];
                    $Press = $_POST['Press'];
                    $send_date = "'".$_POST['send_date']."'";
                    $batch_date = $_POST['batch_date'];
                    $cyl_no = $_POST['cyl_no'];
                    $cyl_eng = $_POST['cyl_eng'];
                    $cata = $_POST['cata'];
                    $catb = $_POST['catb'];
                    $FirstP = $_POST['FirstP'];
                    $Resetswitch = $_POST['Resetswitch'];
                    $tech = $_POST['tech'];
                    $comments = $_POST['comments'];
                    $data="'". $data . "'";
                    $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SAVED' WHERE ID LIKE $ID";
                    mysqli_query($con,$skipping);
                    $skipping="UPDATE COL_RUNNING_CMI SET SPEC = $spec WHERE ID LIKE ID";
                    mysqli_query($con,$skipping);
                    








                    break;
                case 'skip':
                    $data =$_POST['skipForm'];
                    $data="'". $data . "'";
                    $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SKIP' WHERE STATUS LIKE 'NOT COMP' AND FORM_NUM LIKE $data";
                    mysqli_query($con,$skipping);
                    //echo json_encode('kgkjhjkhkhkj');
                break;
                }

               
    };


    
    if(isset($_POST['actionssss']) && !empty($_POST['actions'])){
        $Color_name=$_POST['ColorName'];
        $actionss=$_POST['actions'];
        echo $Color_name;

        switch($actionss){
                case 'fillTable':
                    //grabbing form variables
                        $Color_name = $_POST['actions'];
                        $Cmi_Add = "UPDATE col_main SET STATUS = $Color_name WHERE FORM_NUM='TRIALS BABY'";
                        mysqli_query($con, $Cmi_Add);
        
            
                }
    }
        
    if(!empty($_POST['SendDE'])){

        $formulaNum = "'".$_POST['formulaNum']."'";
        $FirstPull = "'".$_POST['FirstPull']."'";
        $NoRuns = "'".$_POST['NoRuns']."'";
        $Color_name = "'".$_POST['ColorName']."'";
        $SendDe = "'".$_POST['SendDE']."'";
        $BrlDe = "'".$_POST['BrlDE']."'";
        $BrlVis = "'".$_POST['BrlVis']."'";
        $BrlV36 = "'".$_POST['BrlV36']."'";
        $SumpDE = "'".$_POST['SumpDE']."'";
        $SumpVis = "'".$_POST['SumpVis']."'";
        $SumpV36 = "'".$_POST['SumpV36']."'";
        $SendDate = "'".$_POST['send_date']."'";
        $BatchDate = "'".$_POST['batch_date']."'";
        $CylNo = "'".$_POST['cyl_no']."'";
        $CylFtg = "'".$_POST['cyl_ftg']."'";
        $CylEng = "'".$_POST['cyl_eng']."'";
        $comments = "'".$_POST['comments']."'";
        $CatA = "'".$_POST['cata']."'";
        $CatB = "'".$_POST['catb']."'";
        $Tech = "'".$_POST['tech']."'";
        $presses = "'".$_POST['presses']."'";





        $Cmi_Add = "UPDATE col_main SET STATUS = 'COMPgg', SEND_DE = '45', WHERE FORM_NUM = $formulaNum";
        mysqli_query($con, $Cmi_Add);
        
        echo 'testetstese';
        echo $formulaNum;
    echo $FirstPull;
    echo $NoRuns;
    echo $Color_name;
    echo $SendDe;
    echo $BrlDe;
    echo $comments;
    echo $CatA;
    echo $CatB;
    echo $Tech;
    $SendDe = "ppppppppppppppppp";

        //$Color_name=$Color_name[1];

        //$Color_name="'". $Color_name //. "'";

        //"'". $Color_name . "'";
        //$Color_name='testme';
        //$Cmi_Add = "UPDATE col_main SET STATUS = $Color_name WHERE FORM_NUM='TRIALS BABY'";
        //               mysqli_query($con, $Cmi_Add);
        //  echo $Color_name;
    
    }

    //Tech names
    if(!empty($_POST['data1'])){
        //$techs = "SELECT CONCAT(TECH_FIRST,', ', TECH_LAST) FROM INK_TECHS WHERE SITE LIKE 'COLUMBUS'";
    // $techs_result = mysqli_query($con,$techs);
    // $techs_result = mysqli_fetch_all($techs_result);
    $techs_result='works';
    echo json_encode('kgkjhjkhkhkj');
    echo 'kememmeme';
    }



    if(isset($_POST['data'])){
        $data =$_POST['data'];
        $data="'". $data . "'";
        $catb="SELECT CAT_B FROM CATEGORIES WHERE CAT_A LIKE $data ";
        $catb_result = mysqli_query($con,$catb);
        $catb_result = mysqli_fetch_all($catb_result);
        echo json_encode($catb_result);
    
    }





    
if(isset($_POST['skipData'])){
    $action=$_POST['skipData'];
    $ID = $_POST['ID'];
    
    switch($action){
            case 'save':
                $spec = "'".$SPEC."'";
            //    $ColorName = "'".$ColorName."'";
                $JobNum = "'".$_POST['JobNum']."'";
                $RunDate = "'".$RunDate."'";
               // $FirstPull = "'". $FirstPull;
 
                $data ="'".$_POST['formulaNum']."'";
            //  $Col_Rst = $_POST['SendDE'];
                $ColorName = "'".$_POST['ColorName']."'";
                $SendDE = $_POST['SendDE'];
                $BrlDE = $_POST['BrlDE'];
                $BrlVis = $_POST['BrlVis'];
                $BrlV36 = $_POST['BrlV36'];
                $SumpDE = $_POST['SumpDE'];
                $SumpVis = $_POST['SumpVis'];
                $SumpV36 = $_POST['SumpV36'];
                $Press = "'".$_POST['Press']."'";
                $send_date = "'".$_POST['send_date']."'";
                $batch_date = "'".$_POST['batch_date']."'";
                $cyl_no = "'".$_POST['cyl_no']."'";
                $cyl_eng = "'".$_POST['cyl_eng']."'";
                $cyl_ftg = "'".$_POST['cyl_ftg']."'";
                $catb = "'".$_POST['catb']."'";
                $cata = "'".$_POST['cata']."'";
                $FirstP = $_POST['FirstP'];
                $Resetswitch = $_POST['Resetswitch'];
                $tech = "'".$_POST['tech']."'";
                
                $comments = "'".$_POST['comments']."'";
 
                $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SAVED' WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET COMMENTS = $comments WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET COLOR_DESC = $ColorName WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET FIRST_PULL = $FirstPull WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET JOB_NUM = $JobNum WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET NO_RUNS = $NoRuns WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
           //   $skipping="UPDATE COL_RUNNING_CMI SET COLOR_RST = $Col_Rst WHERE ID LIKE $ID";
        //    mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET SEND_DE = $SendDE WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET BRL_DE = $BrlDE WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET BRL_VISC = $BrlVis WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET BRLV36 = $BrlV36 WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET SUMP_DE = $SumpDE WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET SUMP_VISC = $SumpVis WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET SUMPV36 = $SumpV36 WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET PRESS = $Press WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET SEND_DATE = $send_date WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET BATCH_DATE = $batch_date WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET CYL_NUM = $cyl_no WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET FTG = $cyl_ftg WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET ENGR = $cyl_eng WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET CAT_A = $cata WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET CAT_B = $catb WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
            //    $skipping="UPDATE COL_RUNNING_CMI SET FIRST_PDESC = $ColorName WHERE ID LIKE $ID";
            //   mysqli_query($con,$skipping);
            //  $skipping="UPDATE COL_RUNNING_CMI SET COLOR_RST = $ColorName WHERE ID LIKE $ID";
            //    mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET TECH = $tech WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                $skipping="UPDATE COL_RUNNING_CMI SET COMMENTS = $comments WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
 
 
 
 
                break;
 
            case 'skip':

                $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SKIP' WHERE ID LIKE $ID";
                mysqli_query($con,$skipping);
                mysqli_close($con);
              





















                break;
               //default:
 
 
       }
 
           
    };
 
?>



