@extends('layouts.backend')
@section('backend_content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">General Data</h4> 
                </div><!--end card-header-->
                <div class="card-body">  
                    <form class="form-parsley" action="/admin/submit/generaldata" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label">Business Name</label>
                            <input type="text" class="form-control" name="business_name" required placeholder="Business name" value="{{ $getDatas ? $getDatas->name : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Black Logo</label>  
                            @if($getDatas)
                                <input type="file" id="input-file-now" name="logo" accept="image/*" class="dropify" />
                                <br>
                                <img src="/{{ $getDatas ? $getDatas->logo : "" }}" class="logo" alt="">
                            @else
                                <input type="file" id="input-file-now" name="logo" accept="image/*" class="dropify" required />
                            @endif
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">White Logo</label>  
                            @if($getDatas)
                                <input type="file" id="input-file-now" name="white_logo" accept="image/*" class="dropify" />
                                <br>
                                <img src="/{{ $getDatas ? $getDatas->white_logo : "" }}" class="logo" alt="">
                            @else
                                <input type="file" id="input-file-now" name="white_logo" accept="image/*" class="dropify" required />
                            @endif
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="link" class="form-control" name="address" required placeholder="..." value="{{ $getDatas ? $getDatas->address : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Number</label>
                            <input type="link" class="form-control" name="number" required placeholder="+124567875..." value="{{ $getDatas ? $getDatas->number : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="link" class="form-control" name="email" required placeholder="crisptv@gmail..." value="{{ $getDatas ? $getDatas->email : "" }}"/>
                        </div><!--end form-group-->  
                        <div class="form-group">
                            <label class="form-label">Facebook</label>
                            <input type="link" class="form-control" name="facebook" required placeholder="https://facebook..." value="{{ $getDatas ? $getDatas->fb : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Twitter</label>
                            <input type="link" class="form-control" name="twitter" required placeholder="https://Twitter..." value="{{ $getDatas ? $getDatas->tw : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Instagram</label>
                            <input type="link" class="form-control" name="instagram" required placeholder="https://Instagram..." value="{{ $getDatas ? $getDatas->insta : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Youtube</label>
                            <input type="link" class="form-control" name="youtube" required placeholder="https://Youtube..." value="{{ $getDatas ? $getDatas->ytb : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">LinkedIn</label>
                            <input type="link" class="form-control" name="linkedin" required placeholder="https://LinkedIn..." value="{{ $getDatas ? $getDatas->linkedin : "" }}"/>
                        </div><!--end form-group--> 
                        <div class="form-group">
                            <label class="form-label">Mighty Network</label>
                            <input type="link" class="form-control" name="mighty" required placeholder="https://Mighty..." value="{{ $getDatas ? $getDatas->mighty : "" }}"/>
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