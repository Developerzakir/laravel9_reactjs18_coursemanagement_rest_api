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

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Courses </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('courses.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $editCourses->id }}">

            <div class="form-group">
                <label class="info-title">Short Title </label>
         <input type="text" name="short_title" class="form-control input-default " value="{{ $editCourses->short_title }}"  >
            @error('short_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

         <div class="form-group">
            <label class="info-title">Short Description </label>
        <textarea name="short_desc" class="form-control" rows="4" id="comment">
            {{ $editCourses->short_desc }}
        </textarea>
            @error('short_desc')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
        <input type="file" name="small_img" class="custom-file-input" id="image">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>


            <div class="form-group">
               <img id="showImage" src="{{ asset($editCourses->small_img)  }}" style="width: 100px; height: 100px;">
            </div>


  <div class="form-group">
                <label class="info-title">Long Title </label>
         <input type="text" name="long_title" class="form-control input-default " value="{{ $editCourses->long_title }}" >
            @error('long_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


   <div class="form-group">
                <label class="info-title">Long Description</label>
               <textarea class="form-control" name="long_desc" id="summernote2">
                   {{ $editCourses->long_desc }}
               </textarea>
            </div>




 <div class="form-group">
                <label class="info-title">Total Duration</label>
         <input type="text" name="total_duration" class="form-control input-default "  value="{{ $editCourses->total_duration }}">
            @error('total_duration')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>

             <div class="form-group">
                <label class="info-title">Total Lecture </label>
         <input type="text" name="total_lecture" class="form-control input-default " value="{{ $editCourses->total_lecture }}"  >
            @error('total_lecture')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>


             <div class="form-group">
                <label class="info-title">Total Students </label>
         <input type="text" name="total_student" class="form-control input-default "  value="{{ $editCourses->total_student }}" >
            @error('total_student')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>



  <div class="form-group">
                <label class="info-title">Skill All</label>
               <textarea class="form-control" name="skill_all" id="summernote3">
                   {{ $editCourses->skill_all }}
               </textarea>
            </div>


 <div class="form-group">
                <label class="info-title">Video URL </label>
         <input type="text" name="video_url" class="form-control input-default " value="{{ $editCourses->video_url }}" >
            @error('video_url')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>




           <input type="submit" class="btn btn-success" value="Update Course">

        </form>
    </div>
                            </div>
                        </div>
					</div>







                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<script type="text/javascript">
	 $(document).ready(function(){
	 	$('#image').change(function(e){
	 		var reader = new FileReader();
	 		reader.onload = function(e){
	 			$('#showImage').attr('src',e.target.result);
	 		}
	 		reader.readAsDataURL(e.target.files['0']);
	 	});
	 });   
</script>



<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote2').summernote({
        height: 200
    });
</script>

<script type="text/javascript">
    $('#summernote3').summernote({
        height: 200
    });
</script>


@endsection 