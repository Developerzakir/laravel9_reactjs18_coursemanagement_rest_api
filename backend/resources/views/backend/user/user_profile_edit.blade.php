@extends('backend.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, {{$userEdit->name}} welcome back!</h4>
                    
                </div>
            </div>
          
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Profile Update</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                                @csrf 

                                <div class="form-group">
                                    <input type="text" class="form-control input-default" name="name" value="{{$userEdit->name}}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control input-default" value="{{$userEdit->email}}">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file"  class="custom-file-input" name="profile_photo_path" id="image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                  
                                    <img id="showIMG" width="100px" height="100px" src="{{(!empty($userEdit->profile_photo_path)) ? url('upload/user_images/'. $userEdit->profile_photo_path) : url('upload/no_image.jpg')}}" class="img-fluid rounded-circle" alt="">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Update Profile">
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>

<script type="text/javascript">


    $(document).ready(function(){
        $('#image').change(function(e){   //select image id
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showIMG').attr('src', e.target.result);
              //show image id after select
            }
            reader.readAsDataURL(e.target.files['0']);
        })

    });
    </script>
    
@endsection