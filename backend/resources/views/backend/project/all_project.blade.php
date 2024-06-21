@extends('backend.admin_master')

@section('admin')
<div class="content-body" >
    <div class="container-fluid">
       
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
          
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services Page</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                       
                                        <th><strong>Project Name</strong></th>
                                        <th><strong>Project Description</strong></th>
                                        <th><strong>Project Image</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allProject as $item)
                                    <tr>
                                       
                                            <td>{{ $item->project_name}}</td>
                                            <td>
                                                <img src="{{asset($item->img_one)}}" style="width:80px; height:80px;" alt="">
                                            </td>
                                            
                                            <td>{{ Str::limit($item->project_desc,20,'...') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('project.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{route('project.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

@endsection