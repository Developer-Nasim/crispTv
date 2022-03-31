@extends('layouts.backend')
@section('backend_content')
    <div class="row"> 
        @if ($data)
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$data->name}} Sent Request</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <p>
                        Email:- {{$data->email}} <br>
                        Number:- {{$data->number}} <br>
                        Services:- {{$data->services}} <br>
                        Date:- {{date('M m Y, h:i:sa ', strtotime($data->created_at))}} <br>
                    </p>
                    <p>{{$data->message}}</p>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
        @else
            Sorry
        @endif
    
    </div> <!-- end row -->
@endsection