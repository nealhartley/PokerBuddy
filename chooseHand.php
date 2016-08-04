<html>
<link type="text/css" rel="stylesheet" href="style.css">
    <div id="fullpage">
        <div id="container">
            <?php
            //switch true for chooseHandBody accordion type.
            //switch false for jquery custom opening.
            $bodyType = false;
            
            include 'toolBar.php';
            
            if($bodyType){
            include 'chooseHandBody.php';
            }
            else{
                
            include './chooseHandBody2.php';
                           
            }
?>
            
            
            
            
            
            
            <?php
            include 'disclaimer.php'
            ?>                                            
        </div>
    </div>
</html>
