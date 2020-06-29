@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Name: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="add_name" style="width:50%"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Company: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="add_company" style="width:50%"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Phone: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="add_phone" style="width:50%"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Email: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="add_email" style="width:50%"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-6">
        </div>
         <div class="col-md-2">
            <button id="add_contacts" name="add_contacts" type="button" class="btn btn-primary">Submit</button>
        </div>   
    </div>    
</div>
@endsection
