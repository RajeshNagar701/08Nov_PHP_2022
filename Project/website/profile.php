<?php
include_once('header.php');
?>

    
<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Profile</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	


    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>My Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
    
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Name : <?php echo $fetch->name?></h3>
                  <p class="block-38-subheading">ID : <?php echo $fetch->uid?></p>
				  <h3 class="block-38-subheading h4">Mobile : <?php echo $fetch->mobile?></h3>
                  <p class="block-38-subheading">Gender : <?php echo $fetch->gen?></p>
				  <h3 class="block-38-subheading h4">Launguages : <?php echo $fetch->lag?></h3>
                  <p class="block-38-subheading">Country : <?php echo $fetch->cnm?></p>
				  <p class="block-38-subheading"><a href="edituser?btnedit=<?php echo $fetch->uid?>">Edit</a></p>
                </div>
                
              </div>
            </div>
          </div>
         
  
        </div>
      </div>
    </div>


<?php
include_once('footer.php');
?>