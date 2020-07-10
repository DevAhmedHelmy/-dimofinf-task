@extends('layouts.page',['name',$name])
@section('actions')
    <a href="{{route('company.create')}}" class="p-3 font-bold text-blue-100 bg-blue-500 rounded shadow-md">@lang('general.new_company')</a>
@endsection
@section('page-content')

<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{route('company.create')}}" class="btn btn-info btn-sm">
            <i class="fa fa-plus"></i> @lang('general.new_company')</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">@lang('general.name')</th>
                <th scope="col">@lang('general.email')</th>
                <th scope="col">@lang('general.website_url')</th>
                <th scope="col">@lang('general.actions')</th>
              </tr>
            </thead>
            <tbody>
              @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website_url }}</td>
                    <td>
                        <form class="delete-form" action="{{ route('company.destroy',$company->id) }}" method="post">
                            <a href="{{route('company.show',$company->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> @lang('general.view')</a>
                            <a href="{{route('company.edit',$company->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i> @lang('general.edit')</a>

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
        {!! $companies->links('vendor.pagination.bootstrap-4') !!}
    </div>
    </div>
  </div>
@endsection
