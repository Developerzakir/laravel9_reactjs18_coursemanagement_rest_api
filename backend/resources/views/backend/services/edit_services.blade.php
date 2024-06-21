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
                    <h4>Hi,  welcome back!</h4>
                    
                </div>
            </div>
          
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{route('service.update')}}" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="id" value="{{$eidtService->id}}">

                                <div class="form-group">
                                    <label for="" class="info-title">Service Name</label>
                                    <input type="text" class="form-control input-default" name="service_name" value="{{$eidtService->service_name}}">
                                    @error('service_name')
                                    <span class="text-danger">{{$message}}</span>         
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">Service Description</label>
                                    <textarea class="form-control" name="service_text" rows="4" >
                                        {{$eidtService->service_text}}
                                    </textarea>
                                    @error('service_text')
                                    <span class="text-danger">{{$message}}</span>         
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file"  class="custom-file-input" name="service_logo" id="image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <img id="showIMG" src="{{asset($eidtService->service_logo)}}" style="width:100px; height:100px;" class="img-fluid rounded-circle" alt="">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Update Services">
                               
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