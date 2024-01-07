<?php



require("header-script.php");

if(isset($_SESSION['username'])){
 

require("sidebar.php");


require("header.php");
?>


  

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->


        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
       
        <?php 
        
        require("content.php");
        ?>
          
        </div>
        
          <!-- Footer -->
          
          <?php 
        
        require("footer.php");

}

else{
 header("location: login.php?msg=ai chor age login kor");
}
        ?>