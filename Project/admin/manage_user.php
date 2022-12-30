﻿<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage User</h4>
                
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Customer id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Gender</th>
											<th>Languages</th>
											<th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($customer_arr))
									{
										foreach($customer_arr as $data)
										{
									?>
                                        <tr >
                                            <td><?php echo $data->cust_id?></td>
											<td><?php echo $data->name?></td>
											<td><?php echo $data->unm?></td>
											<td><?php echo $data->pass?></td>
											<td><?php echo $data->gen?></td>
											<td><?php echo $data->lag?></td>
                                            <td><a href="#" class="btn btn-primary">Edit</a></td>
											<td><a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
										}
									}
									?>    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    