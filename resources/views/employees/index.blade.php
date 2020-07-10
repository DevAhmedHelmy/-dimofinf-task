@extends('layouts.page',['name',$name])
@section('actions')
    <a href="{{route('employee.create')}}" class="p-3 font-bold text-blue-100 bg-blue-500 rounded shadow-md">@lang('general.new_employee')</a>
@endsection
@section('page-content')

<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{route('employee.create')}}" class="btn btn-info btn-sm">
            <i class="fa fa-plus"></i> @lang('general.new_employee')</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">@lang('general.first_name')</th>
                <th scope="col">@lang('general.last_name')</th>
                <th scope="col">@lang('general.email')</th>
                <th scope="col">@lang('general.phone')</th>
                <th scope="col">@lang('general.actions')</th>

              </tr>
            </thead>
            <tbody>
              @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <form class="delete-form" action="{{ route('employee.destroy',$employee->id) }}" method="post">
                            <a href="{{route('employee.show',$employee->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> @lang('general.view')</a>
                            <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i> @lang('general.edit')</a>

                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-form')"> <i class="fa fa-trash fa-sm"></i> @lang('general.delete')</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
          </table>

      </div>
      <div id="pagination">
        {!! $employees->links('vendor.pagination.bootstrap-4') !!}
    </div>
    </div>
  </div>
@endsection
