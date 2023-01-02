<?php
if(empty($_SESSION['uid']))
{
	echo "<script>
	window.location='index';
	</script>";
}
include_once('header.php');
?>
	<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Edit Profile</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Edit Profile</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Edit Profile</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $fetch->name?>" name="name">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" value="<?php echo $fetch->mobile?>"  name="mobile">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="<?php echo $fetch->unm?>"  name="unm">
                  </div>
                 
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<?php
					$gen=$fetch->gen;
					if($gen=="Male")
					{
					?>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male" checked >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                   <?php
					}
					else
					{	
				   ?>
				   <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male"  >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female" >Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
				  
				  <?php
					}
				  ?>
				  </div>
                  <div class="col-md-6">
				  
                    <label for="Mobile" class="text-black">Lang <span class="text-danger">*</span></label>
                    
					
					
					<div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="Hindi" 
					  <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Hindi",$lag_arr))
					{
						echo "checked";
					}
					?>>Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="English" 
					  <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("English",$lag_arr))
					{
						echo "checked";
					}
					?>>English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lag[]" value="Gujarati" 
					  <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Gujarati",$lag_arr))
					{
						echo "checked";
					}
					?>>Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="c_fname" name="cid">
						<option>Select Country</option>
						<?php 
						foreach($country as $d)
						{
							if($d->cid==$fetch->cid)
							{
						?>
							<option value="<?php echo $d->cid?>" selected>
								<?php echo $d->cnm?>
							</option>
						<?php
							}
							else
							{
						?>
							<option value="<?php echo $d->cid?>">
								<?php echo $d->cnm?>
							</option>
						<?php	
							}
						}
						?>
					</select>
				  </div>
				  <div class="col-md-6">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="c_lname" name="file">
					<img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder" width="50px" class="mb-4">
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Save Profile">
                  </div>
				  
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>

<?php
include_once('footer.php');
?>
   