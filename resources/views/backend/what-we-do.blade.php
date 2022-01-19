@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">What we do</h4> 
                </div><!--end card-header-->
                <div class="card-body">  
                    <form class="form-parsley" action="/admin/submit/whatwedo" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required placeholder="title" value="{{ $getDatas ? $getDatas->title : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Content</label>
                            <textarea name="content" required>{{ $getDatas ? $getDatas->content : "Hello world" }}</textarea> 
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">Main image</label> 
                            <input type="file" id="input-file-now" name="main_img" class="dropify" accept="image/*" />
                            @if($getDatas)
                            <br>
                                <img src="/{{ $getDatas ? $getDatas->main_img : "" }}" class="logo" alt="">
                            @endif
                        </div><!--end form-group-->
                        <div class="form-group">
                            <label class="form-label">Another Image</label> 
                            <input type="file" id="input-file-now" name="another_img" class="dropify" accept="image/*" />
                            @if($getDatas)
                            <br>
                                <img src="/{{ $getDatas ? $getDatas->another_img : "" }}" class="logo" alt="">
                            @endif
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
    
    </div> <!-- end row -->
@endsection