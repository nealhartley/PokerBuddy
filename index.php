
<html>
<link type="text/css" rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <div id="fullpage">
       
          <div class = "paralax-greeting-page">
                
                <div class = "interior-of-paralax">
                    <p>
                        P O K E R
                    </p>

                    <img src = "Images/concepts/LogoConcept2.png"/>

                    <p>
                        B U D D Y
                    </p>
                </div>
              
                
            </div>
        
        
        
        <div id="container">
            
          
            
            <div class = "everything-after-greeting-page">
            
            <?php
            include 'toolBar.php';
            include 'frontPageBody.php';    
            include 'disclaimer.php'
            ?>
            
            </div>
            
            
        </div>
    </div>

<script>       
    
    $(".everything-after-greeting-page").hide();
    
    $( window ).bind('mousewheel DOMMouseScroll' , function(event){
        
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
          //up
        }
        else {
          //down
          $(".paralax-greeting-page").slideUp(400, function(){$(".everything-after-greeting-page").fadeIn();});
          
        }
        
        
        
        
        
        
    
        
    });
</script>

</html>