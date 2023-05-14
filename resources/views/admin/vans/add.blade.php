@extends('admin.content.layout')
@section('content')
	<div class="page-header">
        <h2 class="header-title">Add New Van</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ URL::to('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>{{ trans('home.Home') }}</a>
                <a class="breadcrumb-item" href="{{ URL::to('admin/vans') }}">Vans</a>
                <span class="breadcrumb-item active">Add New Van</span>
            </nav>
        </div>
    </div>
	<div class="card">
		<div class="card-body">
			{{ Form::open(['url'=>'admin/vans/add','files'=>true,'enctype'=>'multipart']) }}
			    
			    <div class="form-row">
			    	<div class="form-group col-md-6">
			            <label for="inputEmail4">Name</label>
			            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Van name','required']) }}
			        </div>
			        <div class="form-group col-md-6">
			            <label for="inputEmail4">Vechile No</label>
			            {{ Form::text('vechile_no',null,['class'=>'form-control','placeholder'=>'Vechile No','required']) }}
			        </div>
			    </div>
			    
			    <button type="submit" class="btn btn-primary">Save</button>
			{{ Form::token() }}
			{{ Form::close() }}
		</div>
	</div>
@stop