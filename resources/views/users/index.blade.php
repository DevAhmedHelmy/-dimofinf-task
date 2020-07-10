@extends('layouts.page',['name',$name])

@section('page-content')

<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{route('users.create')}}" class="btn btn-info btn-sm">
            <i class="fa fa-plus"></i> @lang('general.new_user')</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">@lang('general.name')</th>

                <th scope="col">@lang('general.email')</th>

                <th scope="col">@lang('general.actions')</th>

              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>

                    <td>{{ $user->email }}</td>

                    <td>
                        <form class="delete-form" action="{{ route('users.destroy',$user->id) }}" method="post">
                            <a href="{{route('users.show',$user->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> @lang('general.view')</a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i> @lang('general.edit')</a>

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
        {!! $users->links('vendor.pagination.bootstrap-4') !!}
    </div>
    </div>
  </div>
@endsection
