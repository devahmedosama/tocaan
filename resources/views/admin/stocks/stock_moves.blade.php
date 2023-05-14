@extends('admin.content.layout')
@section('content')
	<div class="page-header">
        <h2 class="header-title"> {{ trans('home.Stocks') }} </h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ URL::to('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>{{ trans('home.Home') }}</a>
               <a href="{{ URL::to('admin/edit-entry') }}" class="breadcrumb-item">{{ trans('home.Edit Entries') }}</a>
                <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div>
    </div>
	<div class="card">
		<div class="card-body">
			<div class="panel-heading ">
		        {{ Form::open(['url'=>'admin/stock/moves','method'=>'get','class'=>'search-form']) }}
		        <div class="row">
		            <div class="col-sm-5">
		            	<label class="label-control">{{ trans('home.Date From') }}</label>
		               {{ Form::date('date_from',app('request')->input('date_from'),['class'=>'form-control']) }}
		            </div>
		            <div class="col-sm-5">
		            	<label class="label-control">{{ trans('home.Date To') }}</label>
		               {{ Form::date('date_to',app('request')->input('date_to'),['class'=>'form-control']) }}
		            </div>
		            
		            <div class="col-sm-1">
		            	<label class="label-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		                <button type="submit"  class="btn btn-primary btn-md">
		                	<i class="anticon anticon-search"></i>
		                </button>
		            </div>
		        </div>
		        {{ Form::close() }}
		        </br>
		        </br>
		    </div>
			<div class="table-responsive">
			    <table class="table">
			        <thead>
			            <tr>
			                <th scope="col">{{ trans('home.Name') }}</th>
			                <th scope="col">{{ trans('home.Amount') }}</th>
			                <th scope="col">{{ trans('home.Date') }}</th>
			                <th scope="col">{{ trans('home.Options') }}</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($allData as $key=>$data)
			            <tr>
			                <td>{{ $data->stock->name }}</td>
			                <td>{{ $data->amount.' '.$data->stock->unit->name }}</td>
			                <td>{{ date('Y-m-d',strtotime($data->created_at)) }}</td>
			                <td>
			                	
			                	<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
								   <i class="fa fa-trash" aria-hidden="true"></i>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">{{ trans('home.Alert') }} </h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								         {{ trans('home.Are You Sure You Want to Delete This ?') }}
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('home.Close') }} </button>
								        <a href="{{ URL::to('admin/moves/delete/'.$data->id) }}" class="btn btn-danger">{{ trans('home.Confirm') }} </a>
								      </div>
								    </div>
								  </div>
								</div>
			                </td>
			            </tr>
			           @endforeach
			           <tr>
			           	<td colspan="3">{{ $allData->appends($_GET)->links() }}</td>
			           </tr>
			        </tbody>
			    </table>
			</div>
		</div>
	</div>
@stop