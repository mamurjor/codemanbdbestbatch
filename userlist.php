<?php

require("header-script.php");


require("sidebar.php");


require("header.php");
?>


  

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->


        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        
       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require("config.php");

    

    $sql=mysqli_query($conn,"SELECT * FROM user");
    $slno=1;
    while($rows=mysqli_fetch_assoc($sql)){
   
    
    ?>
              <tr>
                <th scope="row"><?php echo $slno++; ?></th>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['password'];?></td>

                <td> Edit || Delete </td>
              </tr>
    <?php 
    
    }
    ?>
    
  </tbody>
</table>
          <div>
            <div style="margin-left:150px;">
            <form action="/action_page.php">
            <select name="cat_id">
              <?php 
              
              
              $sqlcat=mysqli_query($conn,"SELECT * FROM category");
              while($rowscat=mysqli_fetch_assoc($sqlcat)){
              ?>
            <option value="<?php echo $rowscat['id'];?>"> <?php echo $rowscat['name'];?> </option>
            <?php 
            
              }
            ?>
            </select> 

              <label for="fname">name:</label><br>
              <input type="text" id="fname" name="fname" value="John"><br>
              <label for="lname">buy_price:</label><br>
              <input type="text" id="lname" name="lname" value="Doe"><br><br>
                <label for="lname">sales_price:</label><br>
              <input type="text" id="lname" name="lname" value="Doe"><br><br>
              <label for="lname">product_fature_image:</label><br>
              <input type="file" id="lname" name="lname" value="Doe"><br><br>
              <input type="submit" value="Submit">
            </form> 
            </div>
          </div>
        </div>
        
          <!-- Footer -->
          
          <?php 
        
        require("footer.php");
        ?>