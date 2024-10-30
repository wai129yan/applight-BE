<?php

if(count($errors) >= 0) return;
foreach ($errors as $key => $err) { ?>
   
   <div class="alert alert-danger fade show w-80 m-atuo" role="alert">
  <h4 class="alert-heading"><?= $err ?></h4>
  
  <p class="mb-0">Try Again</p>
</div>

<?php } ?>

<!-- errors is duplicated name is already exist -->


