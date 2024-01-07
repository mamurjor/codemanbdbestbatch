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
        <div class="content-wrapper">
       
        <div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Mask Plugin </span> components with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html" target="_blank">Mask Plugin Documentaion.</a></p>
  </div>
</div>

<!-- Masked Input -->
<div class="card card-default">
  <div class="card-header">
    <h2>Masked Input</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"> </a>


  </div>
  

  <form action="category-save.php" method="post">
    <div class="row">
      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium" for="">Categroy Name</label>
          <div class="input-group mb-3">         
            <input type="text" name="name" class="form-control" >
          </div>        
        </div>
      </div>

      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium"> Categroy Code</label>
          <div class="input-group mb-3">
         
            <input type="text" name="code" class="form-control" >
          </div>
         
        </div>
        <button type="submit">Save </button>
      </div>

      </form>

  </div>
</div>



  </div>
</div>

</div>
         
          
        </div>
        
          <!-- Footer -->
          
          <?php 
        
        require("footer.php");
        ?>