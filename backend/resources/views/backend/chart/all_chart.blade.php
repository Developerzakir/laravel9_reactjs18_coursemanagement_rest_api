@extends('backend.admin_master')
@section('admin')


<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">


							</div>
							<div class="modal-body">

							</div>
						</div>
					</div>
				</div>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">


                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">

                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chart Content Page </h4>
                            </div>
                            <div class="card-body">
    <div class="table-responsive">
        <table class="table table-responsive-md">
            <thead>
                <tr>


                    <th><strong> Techonology </strong></th>
                    <th><strong> Projects</strong></th>


                    <th></th>
                </tr>
            </thead>
            <tbody>

		@foreach($chart as $item)									 
	<tr>


        <td> {{ $item->x_data  }}  </td>
        <td> {{ $item->y_data  }}  </td>


          <td>
				<div class="d-flex">
	 <a href="{{ route('edit.chart',$item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

				</div>
			</td>
                 </tr>
                 @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                    </div>
                </div>
            </div>
        </div>




@endsection