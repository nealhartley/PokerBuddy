
<html>
<link type="text/css" rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <div id="fullpage">
       
        <!--the Greeting pafe for the front page. dissapears on scroll down. Jquery for that down bottom-->
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
                <div class = "scroll">
                    
                    <p>scroll to continue</p>
                   
                    <!--<img source = "images/upsideTriangle.svg"
                         width = "50"
                         height ="50"
                         /> -->
                    
                </div>
                
            </div>
        
        
        
        <div id="container">
            
          
            <!--Every thing on the page ahs been developed individually so here they are pulled into this page.-->
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
    //hide everything apart from the greeting page.
    $(".everything-after-greeting-page").hide();
    //bind a function to mousewheel scroll. 
    $( window ).bind('mousewheel DOMMouseScroll' , function(event){
        //if they scroll up
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
          //up
        }
        //if they scroll down. which we want.
        else {
          //down
          //we then take the greeting page and slide it up using jquery slideUp.
          //we use function callback in order to have the rest of the page fadeIn after previous aniamtion completes. 
          $(".paralax-greeting-page").slideUp(400, function(){$(".everything-after-greeting-page").fadeIn();});
          
        }
        
        
        
        
        
        
    
        
    });
</script>

</html>