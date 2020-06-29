@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
        <div class="col-md-8">  </div>              
        <div class="col-md-4">                
            <input type="text" class="form-control" id="input_search" placeholder="Search" style="width:50%"/>
        </div>
    </div>
    <div class="row justify-content-center">            
            <div class="col-md-8">
               <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>NAME</td>
                            <td>COMPANY</td>
                            <td>PHONE</td>
                            <td>EMAIL</td>
                            <td></td>
                        </tr>
                    </thead>
                    @if(!empty($contacts)) 
                    <tbody>
                    @foreach($contacts as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->company }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <a type="button" class="btn btn-outline-success btn-sm edit_contacts" href="/edit-contacts/{{$value->id}}">Edit</a>
                                <a type="button" class="btn btn-outline-danger btn-sm delete_contacts" contact_id="{{$value->id}}">Delete</a> 
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    @else
                    <tbody>
                        <tr><td colspan="5">Empty</td></tr>
                    </tbody>
                    @endif
                </table>
            </div>
    </div>
</div>
@endsection
