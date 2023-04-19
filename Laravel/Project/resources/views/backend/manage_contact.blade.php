@extends('backend.layout.main')

@section('main_container')

        <!--  page-wrapper -->
        <div id="page-wrapper">

      
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Contact</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Contact
                        </div>
							
								
							
                        <div class="panel-body">
						<form method="post">
							@csrf
							<input type="search" name="name" id="name" class="form-control" placeholder="Search By Name">
                        </form>    
							<br><br>
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table">
                                   <thead>
                                        <tr>
                                            <th>Contact ID</th>
                                            <th>User Name</th>
											<th>User email</th>
											<th>User sub</th>
											<th>User Msg</th>
                                            <th>Action</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@foreach($data as $d)
                                        <tr class="odd gradeX">
                                            <td>{{$d->id}}</td>
											<td>{{$d->name}}</td>
											<td>{{$d->email}}</td>
											<td>{{$d->sub}}</td>
											<td>{{$d->msg}}</td>
                                            <td>
												<a href="{{'manage_contact/'.$d->id}}" class="btn btn-danger">Delete</a>
											</td>
                                        </tr>
                                    @endforeach    
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
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{url('backend/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{url('backend/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{url('backend/assets/plugins/pace/pace.js')}}"></script>
    <script src="{{url('backend/assets/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{url('backend/assets/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('backend/assets/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	
	<script>
		$('#name').on('keypress', function () {
                var name = this.value;
                $('#table').html('');
                $.ajax({
				url:"{{url('/getdata')}}",
				type: "POST",
				data: {
                    name: name,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#table').html('');
                        $.each(result.name, function (key, value) {
                            $('#table').append('<tr> <td>' + value.id + '</td><td>' + value.name + '</td><td>' + value.email + '</td></tr>');
                        });
                        
                    }
                });
            });
	</script>

</body>

</html>
   @endsection