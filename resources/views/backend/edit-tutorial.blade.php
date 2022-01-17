@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Tutorial</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    @if ($getDatas)
                        <form class="form-parsley" action="/admin/submit/editTutorialData" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="number" class="d-none" name="id" value="{{$getDatas->id}}"/>
                            <div class="form-group">
                                <label class="form-label">Tutorial title</label>
                                <input type="text" class="form-control" name="title" value="{{$getDatas->title}}" required placeholder="Title..."/>
                            </div><!--end form-group--> 
                            <div class="form-group">
                                <label class="form-label">Tutorial Img</label> 
                                <input type="file" id="input-file-now" name="img" accept="image/*" class="dropify" /> 
                                <br>
                                <img style="max-width:300px" src="/{{$getDatas->img}}" alt="">
                            </div><!--end form-group-->
                            <div class="form-group">
                                <label class="form-label">Tutorial Content</label>
                                <textarea id="basic-conf" name="content" required>{{$getDatas->content}}</textarea> 
                            </div><!--end form-group-->  
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="/admin/tutorial" class="btn btn-success">
                                    Cancel
                                </a>
                            </div><!--end form-group-->
                        </form><!--end form--> 
                    @endif       
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->  
    </div> <!-- end row -->
@endsection