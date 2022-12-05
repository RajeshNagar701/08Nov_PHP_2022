<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Product</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Product
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Enter Name</label>
								<input class="form-control" type="text" />
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Select Example</label>
								<select class="form-control">
									<option>One Vale</option>
									<option>Two Vale</option>
									<option>Three Vale</option>
									<option>Four Vale</option>
								</select>
							</div>
                            <hr />
                            <div class="form-group">
								<label>Multiple Select Example</label>
								<select multiple="" class="form-control">
									<option>One Vale</option>
									<option>Two Vale</option>
									<option>Three Vale</option>
									<option>Four Vale</option>
								</select>
							</div>
                            <hr />
                            <div class="form-group">
								<label>Checkboxes</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" />Checkbox Example One
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" />Checkbox Example Two
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" />Checkbox Example Three
									</label>
								</div>
							    <div class="checkbox">
										<label>
											<input type="checkbox" value="" />Checkbox Example Four
										</label>
									</div>
								</div>
                            <hr />
								<div class="form-group">
									<label>Radio Button Examples</label>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Radio Example One
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Example Two
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Example Three
										</label>
									</div>
								</div>
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" />
									
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