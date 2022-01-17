@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Mission</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form class="form-parsley" action="/admin/submit/missionSubmitData" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <input type="text" class="d-none" name="type" value="mission"/>
                        <div class="form-group">
                            <label class="form-label">Content</label>
                            <textarea id="basic-conf" name="content" required>{{ $getMissionDatas ? $getMissionDatas->content : "hello world" }}</textarea> 
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