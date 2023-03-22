@extends('backend.layout.main')

@section('main_container')
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage User</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
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
                                            <th>User ID</th>
                                            <th>User Name</th>
											<th>User Username</th>
											<th>User gender</th>
											<th>User Lag</th>
											<th>User cid</th>
											<th>User file</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@foreach($data as $d)
                                        <tr class="odd gradeX">
                                            <td>{{$d->id}}</td>
											<td>{{$d->name}}</td>
											<td>{{$d->unm}}</td>
											<td>{{$d->gen}}</td>
											<td>{{$d->lag}}</td>
											<td>{{$d->cid}}</td>
											<td>{{$d->file}}</td>
                                            <td>
												<a href="{{url('manage_user/'.$d->id)}}" class="btn btn-danger">Delete</a>
												<a href="{{url('status_user/'.$d->id)}}" class="btn btn-success">{{$d->status}}</a>
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
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
   @endsection