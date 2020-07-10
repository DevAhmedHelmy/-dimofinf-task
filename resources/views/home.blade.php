@extends('layouts.page',['name',$name])

@section('page-content')

<div class="row">
    <div class="mb-4 col-xl-6 col-md-6">
        <div class="py-2 shadow card border-left-primary h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="mr-2 col">
                <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">@lang('general.companies')</div>
                <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $companies_count }}</div>
              </div>
              <div class="col-auto">
                <i class="text-gray-300 fas fa-calendar fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4 col-xl-6 col-md-6">
        <div class="py-2 shadow card border-left-primary h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="mr-2 col">
                <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">@lang('general.employees')</div>
                <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $employees_count }}</div>
              </div>
              <div class="col-auto">
                <i class="text-gray-300 fas fa-calendar fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>

<div class="row">
    <div class="col-6">
        <div class="mb-4 shadow card">
            <div class="py-3 card-header">
              <h6 class="m-0 font-weight-bold text-primary">
                 @lang('general.latest_companies')</a>
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

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ (str_limit($company->website_url, $limit = 20, $end = '...')) ?? trans('general.not_found') }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                  </table>

              </div>

            </div>
          </div>
    </div>
    <div class="col-6">
        <div class="mb-4 shadow card">
            <div class="py-3 card-header">
              <h6 class="m-0 font-weight-bold text-primary">
                 @lang('general.latest_employees')</a>
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



                      </tr>
                    </thead>
                    <tbody>
                      @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->email }}</td>


                        </tr>
                    @endforeach

                    </tbody>
                  </table>

              </div>

            </div>
          </div>
    </div>
</div>



@endsection
