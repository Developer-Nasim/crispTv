@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Media</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    @if ($getDatas)
                        <form class="form-parsley" action="/admin/submit/editOtherMediaData" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="number" class="d-none" name="id" value="{{$getDatas->id}}"/>
                            <div class="form-group">
                                <label class="form-label">Position</label> 
                                <select name="position" class="form-control">
                                    <option value="{{$getDatas->position}}">{{$getDatas->position}}</option>
                                    <option value="home-hero">Home Hero</option>
                                    <option value="home-meaning">Home Meaning</option>
                                    <option value="about-hero">About Hero</option>
                                    <option value="the-tribe">The Tribe</option>
                                    <option value="event-background">Event Background</option>
                                    <option value="comming-soon">Comming Soon</option>
                                    <option value="project-hero">Project Hero</option>
                                    <option value="careers">Careers</option>
                                </select> 
                            </div><!--end form-group--> 
                            <div class="form-group">
                                <label class="form-label">Image</label> 
                                <input type="file" id="input-file-now" name="img" accept="image/*" class="dropify" /> 
                                @if ($getDatas->img) 
                                    <br>
                                    <img style="max-width:300px" src="/{{$getDatas->img}}" alt="">
                                @endif
                            </div><!--end form-group--> 
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="/admin/other-medias" class="btn btn-success">
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