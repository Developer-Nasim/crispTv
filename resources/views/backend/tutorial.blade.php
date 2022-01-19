@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Tutorial</h4> 
                </div><!--end card-header-->
                <div class="card-body">  
                    <form class="form-parsley" action="/admin/submit/TutorialData" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label">Tutorial Title</label>
                            <input type="text" class="form-control" name="title" required placeholder="Title..."/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" required placeholder="Sub Title..."/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Tutorial Img</label> 
                            <input type="file" id="input-file-now" name="img" class="dropify" accept="image/*" /> 
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">Tutorial Content</label>
                            <textarea id="basic-conf" name="content" required>Hello, World!</textarea> 
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
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Tutorial</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-priority="1">Title</th> 
                                        <th data-priority="4">Image</th>
                                        <th data-priority="5"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($getDatas)
                                        @for ($i = 0; $i < count($getDatas); $i++)
                                            <tr>
                                                <th>#{{$i+1}}</th>
                                                <td>{{$getDatas[$i]->title}}</td>
                                                <td><img src="/{{$getDatas[$i]->img}}" alt=""></td>
                                                <td>{{date('M m Y, h:i:sa ', strtotime($getDatas[$i]->created_at))}}</td>  
                                                <td> 
                                                    <a href="/admin/edit/tutorial/{{$getDatas[$i]->id}}" class="btn btn-success">Edit</a> 
                                                    <a href="/admin/delete/tutorial/{{$getDatas[$i]->id}}" class="btn btn-danger">Delete</a> 
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