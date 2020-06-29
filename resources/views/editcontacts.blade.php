@extends('layouts.app')

@section('content')
@if(!empty($editcontacts)) 
<div class="container">
    @foreach($editcontacts as $key => $value)
    <input type="hidden" id="contact_id" value="{{$value->id}}">
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Name: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="edit_name" style="width:50%" value="{{$value->name}}" />
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Company: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="edit_company" style="width:50%" value="{{$value->company}}"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Phone: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="edit_phone" style="width:50%" value="{{$value->phone}}"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-1">
            Email: 
        </div>
         <div class="col-md-6">
            <input type="text" class="form-control" id="edit_email" style="width:50%" value="{{$value->email}}"/>
        </div>   
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-6">
        </div>
         <div class="col-md-2">
            <button id="edit_contacts" name="edit_contacts" type="button" class="btn btn-primary">Submit</button>
        </div>   
    </div>    
    @endforeach
</div>
@endif
@endsection
