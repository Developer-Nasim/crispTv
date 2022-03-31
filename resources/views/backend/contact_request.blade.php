@extends('layouts.backend')
@section('backend_content')
    <div class="row"> 
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contact Request</h4> 
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-priority="1">Name</th> 
                                        <th data-priority="2">Email</th> 
                                        <th data-priority="3">Number</th>
                                        <th data-priority="4">Services</th>
                                        <th data-priority="5">Date</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($getDatas)
                                        @for ($i = 0; $i < count($getDatas); $i++)
                                            <tr>
                                                <th>#{{$i+1}}</th> 
                                                <td>{{$getDatas[$i]->name}}</td> 
                                                <td>{{$getDatas[$i]->email}}</td> 
                                                <td>{{$getDatas[$i]->number}}</td>  
                                                <td>{{$getDatas[$i]->services}}</td> 
                                                <td>{{date('M m Y, h:i:sa ', strtotime($getDatas[$i]->created_at))}}</td> 
                                                <td>
                                                    <a href="/admin/delete/contact-request/{{$getDatas[$i]->id}}" class="btn btn-danger">Delete</a> 
                                                    <a href="/admin/view/contact-request/{{$getDatas[$i]->id}}" class="btn btn-success">View</a> 
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