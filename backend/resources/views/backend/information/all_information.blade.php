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
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Information Page</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                       
                                        <th><strong>About</strong></th>
                                        <th><strong>Refund Policy</strong></th>
                                        <th><strong>Terms & Condition</strong></th>
                                        <th><strong>Privacy & Policy</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result as $item)
                                    <tr>
                                       
                                            <td>{{ Str::limit($item->about, 20,'...') }}</td>
                                            <td>{{ Str::limit($item->refund, 20, '...')}}</td>
                                            <td>{{ Str::limit($item->terms,20,'...') }}</td>
                                            <td>{{ Str::limit($item->privacy,20,'...') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('information.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{route('information.destroy',$item->id)}}" onclick="return confirm('are you sure want to delete?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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