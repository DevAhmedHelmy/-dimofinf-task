@extends('layouts.page',['name',$name])

@section('page-content')
<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">
         @lang('general.basic_information')
      </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-8">

                <div class="col-sm-12 border-left">
                    <div class="description-block">
                    <h5 class="description-header">@lang('general.name')</h5>
                    <span class="description-text">{{ $company->name }}</span>
                    </div>

                </div>
                <hr>
                <div class="col-sm-12 border-left">
                    <div class="description-block">
                    <h5 class="description-header">@lang('general.email')</h5>
                    <span class="description-text">{{ $company->email }}</span>
                    </div>

                </div>
                <hr>
                <div class="col-sm-12 border-left">
                    <div class="description-block">
                    <h5 class="description-header">@lang('general.website_url')</h5>
                    <span class="description-text">{{ (str_limit($company->website_url, $limit = 50, $end = '...')) ?? trans('general.not_found') }}</span>
                    </div>

                </div>

            </div>
            <div class="col-4">
                @if($company->logo)
                {{-- <img src="{{ asset('/logos/'.$company->logo) }}"> --}}
                <img src="{{ $company->logo }}">
                @else
                <img src="{{ asset('/logos/logo.png') }}">
                @endif
            </div>
        </div>

    </div>
</div>


<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">
         @lang('general.employees')
      </h6>
    </div>
    <div class="card-body">
        @if(count($company->employees) > 0)
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
              @foreach($company->employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <a href="{{route('employee.show',$employee->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> @lang('general.view')</a>

                    </td>
                </tr>
            @endforeach

            </tbody>
          </table>

      </div>
      @else

<p>Not Found</p>
@endif
    </div>
  </div>


@endsection
