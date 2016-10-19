@extends('layouts.admin')

@section('content')

  
    <div class= "container row ">
        <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
            <div  class="col-md-12">
                <h3>Edit Mr/Ms <strong> {{ $customer[0]->name }}</strong></h3></br>
                <form action="{{ url('customers/'.$customer[0]->id.'/update') }}" method="POST" class="form-horizontal">
                          {{ csrf_field() }}

                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fullname">Full name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $customer[0]->name }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="email" value="{{ $customer[0]->email }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tel">Telephone:</label>
                    <div class="col-sm-6">          
                      <input type="text" class="form-control" name="tel" id="tel" value="{{ $customer[0]->tel }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="gov">Gouvernorat:</label>
                    <div class="col-sm-6">          
                      <input type="text" class="form-control" name="gov" id="gov" value="{{ $customer[0]->gouvernorat }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address:</label>
                    <div class="col-sm-6">          
                      <input type="text" class="form-control" name="address" id="address" value="{{ $customer[0]->address }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="zip">ZipCode:</label>
                    <div class="col-sm-6">          
                      <input type="text" class="form-control" name="zip" id="zip" value="{{ $customer[0]->zipcode }}">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-6">
                      <button type="submit" class="btn btn-default">Edit</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>



@endsection