@extends('admin.content.layout')
@section('content')
	<div class="page-header">
        <h2 class="header-title"> {{ trans('home.Stock Types') }} </h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ URL::to('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>{{ trans('home.Home') }}</a>
                <span class="breadcrumb-item active">{{ trans('home.Stock Types') }}</span>
            </nav>
        </div>
    </div>
	<div class="card">
		<div class="card-body">
			<a href="{{ URL::to('admin/stock-types/add') }}" class="btn btn-md btn-primary pull-right">{{ trans('home.Add Stock Type') }}</a>
			<div class="table-responsive">
			    <table class="table">
			        <thead>
			            <tr>
			                <th scope="col">{{ trans('home.Name') }}</th>
			                <th scope="col">{{ trans('home.Options') }}</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($allData as $data)
			            <tr>
			                <td>{{ $data->name }}</td>
			                <td>
			                	<a href="{{ URL::to('admin/stock-types/edit/'.$data->id) }}" class="btn btn-primary btn-xs">
			                	 <i class="anticon anticon-edit"></i>
			                	</a>
			                	<!-- Button trigger modal -->
								<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
								   <i class="anticon anticon-delete"></i>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel"> Alert</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								         Are You Sure You Want to Delete This ?
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
								        <a href="{{ URL::to('admin/stock-types/delete/'.$data->id) }}" class="btn btn-danger"> Confirm</a>
								      </div>
								    </div>
								  </div>
								</div>
			                </td>
			            </tr>
			           @endforeach
			           <tr>
			           	<td colspan="3">{{ $allData->links() }}</td>
			           </tr>
			        </tbody>
			    </table>
			</div>
		</div>
	</div>
@stop