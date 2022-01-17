@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Other Media</h4> 
                </div><!--end card-header-->
                <div class="card-body">  
                    <form class="form-parsley" action="/admin/submit/otherMedia" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label">Position</label>
                            <select name="position" class="form-control" required>
                                <option value="">Select Postion</option>
                                <option value="home-hero">Home Hero</option>
                                <option value="home-meaning">Home Meaning</option>
                                <option value="about-hero">About Hero</option>
                                <option value="about-tribe">About Tribe</option>
                                <option value="event-background">Event Background</option>
                                <option value="comming-soon">Comming Soon</option>
                                <option value="project-hero">Project Hero</option>
                                <option value="avaters-tribe">Avaters Tribe</option>
                                <option value="career-tribe">Career Tribe</option>
                            </select>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Image</label> 
                            <input type="file" id="input-file-now" accept="image/*" name="img" class="dropify" required /> 
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
                    <h4 class="card-title">Medias</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-priority="1">Position</th> 
                                        <th data-priority="4">Image</th>
                                        <th data-priority="5"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($getDatas)
                                        @for ($i = 0; $i < count($getDatas); $i++)
                                            <tr>
                                                <th>#{{$i+1}}</th>
                                                <td>{{strtoupper(preg_replace('/-/i', ' ', $getDatas[$i]->position))}}</td>
                                                <td><img src="/{{$getDatas[$i]->img}}" alt=""></td>
                                                <td>{{date('M m Y, h:i:sa ', strtotime($getDatas[$i]->created_at))}}</td> 
                                                <td> 
                                                    <a href="/admin/edit/other_media/{{$getDatas[$i]->id}}" class="btn btn-success">Edit</a> 
                                                    <a href="/admin/delete/other_media/{{$getDatas[$i]->id}}" class="btn btn-danger">Delete</a> 
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