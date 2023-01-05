<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Feedback</h4>
                
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Feedback id</th>
											<th>Cust Id</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Feedback</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($feedback_arr))
									{
										foreach($feedback_arr as $data)
										{
									?>
                                        <tr >
                                            <td><?php echo $data->feed_id?></td>
											<td><?php echo $data->uid?></td>
											<td><?php echo $data->name?></td>
											<td><?php echo $data->subject?></td>
											<td><?php echo $data->feedback?></td>
											<td><a href="delete?delfeed_idbtn=<?php echo $data->feed_id?>" class="btn btn-danger">Delete</a></td>
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