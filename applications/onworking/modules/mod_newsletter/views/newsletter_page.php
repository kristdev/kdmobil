<div class="row">

  <div class="col-md-3"></div> <!-- /.col-md-3 -->
  <div class="col-md-6">

    <!-- Subscribe Form -->
    <form id="monform" action="mod_newsletter/validate" method="post" class="form-inline" role="form">
      
      <!-- Input -->
      <div class="form-group">
        <label class="sr-only" for="email">Email address</label>
        <input id="email" name="email" class="form-control" type="email" placeholder="Enter email address">
      </div> <!-- /.form-group -->
      
      <!-- Submit Button -->
      <button type="submit" class="btn btn-success btn-lg">Sign up</button>

    </form> <!-- /.form-inline -->
    
    <!-- Description -->
    <p class="desc">Sign up now to get early notifications.</p>

    <!-- Messages à afficher -->
    <?php 
    if(validation_errors()===true){
      echo validation_errors();
    }
    ?>

  </div> <!-- /.col-md-6 -->
  <div class="col-md-3"></div> <!-- /.col-md-3 -->

</div> <!-- /.row -->