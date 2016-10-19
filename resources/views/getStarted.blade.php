@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
          @include('common.errors')
    <h2 style="color: #FFF;">Let's get started</h2> 
      <div class="container">
          <form action="{{ url('store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

          <form class="form-horizontal">
             <div class="form-group">
              <label class="control-label col-sm-2" for="fullname" style="color: #FFF;">Full name:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email" style="color: #FFF;" >Email:</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="tel" style="color: #FFF;">Telephone:</label>
              <div class="col-sm-6">          
                <input type="text" class="form-control" name="tel" id="tel" placeholder="Enter your telephone number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="gov" style="color: #FFF;">State:</label>
              <div class="col-sm-6">          
                <input type="text" class="form-control" name="gov" id="gov" placeholder="Enter your State">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="address" style="color: #FFF;">Address:</label>
              <div class="col-sm-6">          
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="zip" style="color: #FFF;">ZipCode:</label>
              <div class="col-sm-6">          
                <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter ZipCode">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-info">Submit</button>
              </div>
            </div>
          </form>
    </div>
  </div>

</div>

@endsection