@extends('layouts.backend')
@section('backend_content')
    <div class="row"> 
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">More Info</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <form class="form-parsley" action="/admin/submit/moreSubmitData" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}  
                        <div class="form-group">
                            <label class="form-label">Feedbacks</label>
                            <input type="text" class="form-control" name="feedback" value="{{$getDatas ? $getDatas->feedbacks : ""}}" required placeholder="90% or 4.7"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Projects</label>
                            <input type="text" class="form-control" name="projects" value="{{$getDatas ? $getDatas->projects : ""}}" required placeholder="20+"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">We are since</label>
                            <input type="text" class="form-control" name="we_are_since" value="{{$getDatas ? $getDatas->we_are_since : ""}}" required placeholder="1920"/>
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