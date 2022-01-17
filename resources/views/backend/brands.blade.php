@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Brands Data</h4> 
                </div><!--end card-header-->
                <div class="card-body">  
                    <form class="form-parsley" action="/admin/submit/brandsdata" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="brand_name" required placeholder="Brand name"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Logo</label> 
                            <input type="file" id="input-file-now" name="logo" class="dropify" accept="image/*" required /> 
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">Link</label>
                            <input type="link" class="form-control" name="link" placeholder="https://brands..." required />
                        </div><!--end form-group-->  
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-danger">
                                Cancel
                            </button>
                        </div><!--end form-group-->
                    </form><!--end form-->        
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col --> 
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All brands</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-priority="1">Logo</th>
                                        <th data-priority="3">Name</th>
                                        <th data-priority="3">link</th>
                                        <th data-priority="4">Date</th>
                                        <th data-priority="5"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($getDatas)
                                        @for ($i = 0; $i < count($getDatas); $i++)
                                            <tr>
                                                <th>#{{$i+1}}</th>
                                                <td><img src="/{{$getDatas[$i]->logo}}" alt=""></td>
                                                <td>{{$getDatas[$i]->name}}</td>
                                                <td><div style="max-width: 200px">{{$getDatas[$i]->link}}</div></td>
                                                <td>{{date('M m Y, h:i:sa ', strtotime($getDatas[$i]->created_at))}}</td> 
                                                <td>
                                                    <a href="/admin/delete/brand/{{$getDatas[$i]->id}}" class="btn btn-danger">Delete</a> 
                                                </td> 
                                            </tr>  
                                        @endfor
                                    @endif
                                </tbody>
                            </table>
                        </div>    
                    </div>    
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    
    </div> <!-- end row -->
@endsection