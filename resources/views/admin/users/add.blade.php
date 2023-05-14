@extends('admin.content.layout')

@section('content')

	<div class="page-header">

        <h2 class="header-title">{{ $title }}</h2>

        <div class="header-sub-title">

            <nav class="breadcrumb breadcrumb-dash">

                <a href="{{ URL::to('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>{{ trans('home.Home') }}</a>

                <span class="breadcrumb-item active">{{ $title }}</span>

            </nav>

        </div>

    </div>

	<div class="card">

		<div class="card-body">

			{{ Form::open(['url'=>'admin/users/add','files'=>true,'enctype'=>'multipart']) }}


			    
			    
				 <div class="form-row">

			        <div class="form-group col-md-6">
			            <label for="inputEmail4">{{ trans('home.Username') }}</label>
			            {{ Form::text('username',null,['class'=>'form-control','placeholder'=>trans('home.Username'),'required']) }}
			        </div>
			        <div class="form-group col-md-6">
			            <label for="inputEmail4">{{ trans('home.Language') }}</label>
			            {{ Form::select('locale',$langs,null,['class'=>'form-control','required']) }}
			        </div>
			    </div>
			    <div class="form-row">

			        <div class="form-group col-md-6">

			            <label for="inputEmail4">{{ trans('home.E-mail') }}</label>

			            {{ Form::email('email',null,['class'=>'form-control','placeholder'=>trans('home.E-mail'),'required']) }}

			        </div>

			        <div class="form-group col-md-6">

			            <label for="inputEmail4">{{ trans('home.Phone') }}</label>

			            {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>trans('home.Phone'),'required']) }}

			        </div>

			    </div>
			    <div class="form-row">

			        <div class="form-group col-md-6">

			            <label for="inputEmail4">{{ trans('home.Password') }}</label>

			            {{ Form::password('password',['class'=>'form-control']) }}

			        </div>

			        <div class="form-group col-md-6">

			            <label for="inputEmail4">{{ trans('home.Confirm Password') }}</label>

			            {{ Form::password('confirm_password',['class'=>'form-control']) }}

			        </div>

			    </div>

			    <button type="submit" class="btn btn-primary">{{ trans('home.Save') }}</button>

			{{ Form::token() }}

			{{ Form::close() }}

		</div>

	</div>

@stop