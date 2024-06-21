@extends('backend.admin_master')

@section('admin')
<div class="content-body" style="min-height: 788px;">
    <div class="container-fluid">
        <!-- Add Project -->
        <div class="modal fade" id="addProjectSidebar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Password Change</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{route('user.change.password.update')}}">
                                @csrf 

                                <div class="form-group">
                                    <label for="" class="info-title">Current Password</label>
                                    <input type="password" id="current_password" name="old_password" class="form-control input-default">
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">New Password</label>
                                    <input type="password" id="password" name="password" class="form-control input-default">
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">Confirm Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control input-default">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Update Password">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection