@extends('layouts.admin')

@section('content')

<div class= "container">
	<div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
		<h4>Are you sure you want to delete Mr/Ms <strong> {{ $customer[0]->name }}</strong> </h4>

		<form action="{{ url('customers/'.$customer[0]->id.'/delete') }}" method="POST">
		            {{ csrf_field() }}
		            {{ method_field('DELETE') }}

		            <button type="submit" class="btn btn-danger">
		                <i class="fa fa-trash"></i> Delete
		            </button>
		</form>

		</br>
		<div>
			<a href="{{ URL::to('customers/') }}" type="submit">Cancel </a>
		</div>
	</div>
</div>



@endsection