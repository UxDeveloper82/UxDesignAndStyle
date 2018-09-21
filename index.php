<?php
    include('inc/header.php');
?>
<?php
     $PagesDirectory = 'Pages Folder';
    if(!empty($_GET['PageName'])){
        $PagesFolder =scandir($PagesDirectory,0);
        unset($PagesFolder[0],$PagesFolder[1]);
        //print_r($PageFolder);
        $PageName = $_GET['PageName'];
        //echo $PageName;
            if(in_array($PageName. '.inc.php', $PagesFolder)){
                include($PagesDirectory. '/'. $PageName. '.inc.php');  
    
            }else{
                //Page Not Found
                echo "<h1>Your Are Lost ....</h1>";
                echo "<h1>Sorry Page Not Found!</h1>";
            }

        }else{
            //Home.inc.php
            include($PagesDirectory.'/Home.inc.php');
        }
    
?>
<?php
      include('inc/detailsmodal.php');
      include('inc/footer.php');
?>