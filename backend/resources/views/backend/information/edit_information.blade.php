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
                        <h4 class="card-title">Update Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{route('information.update',$eidtInformation->id)}}">
                                @csrf 

                                <div class="form-group">
                                    <label for="" class="info-title">About</label>
                                    <textarea class="form-control" name="about" id="summernote">
                                        {!! $eidtInformation->about !!}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">Refund Policy</label>
                                    <textarea class="form-control" name="refund" id="summernote2">
                                        {!! $eidtInformation->refund !!}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">Terms & Condition</label>
                                    <textarea class="form-control" name="terms" id="summernote3">
                                        {!! $eidtInformation->terms !!}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="" class="info-title">Privacy & Policy</label>
                                    <textarea class="form-control" name="privacy" id="summernote4">
                                        {!! $eidtInformation->privacy !!}
                                    </textarea>
                                </div>

                                

                                <input type="submit" class="btn btn-primary" value="Update Information">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>


<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
<script type="text/javascript">
    $('#summernote2').summernote({
        height: 400
    });
</script>
<script type="text/javascript">
    $('#summernote3').summernote({
        height: 400
    });
</script>
<script type="text/javascript">
    $('#summernote4').summernote({
        height: 400
    });
</script>

@endsection