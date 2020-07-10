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
            <div class="col-sm-3 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.first_name')</h5>
                <span class="description-text">{{ $employee->first_name }}</span>
                </div>

            </div>
            <div class="col-sm-3 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.last_name')</h5>
                <span class="description-text">{{ $employee->last_name }}</span>
                </div>

            </div>
            <div class="col-sm-3 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.email')</h5>
                <span class="description-text">{{ $employee->email }}</span>
                </div>

            </div>

            <div class="col-sm-3 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.phone')</h5>
                <span class="description-text">{{ $employee->phone }}</span>
                </div>

            </div>

        </div>

    </div>
</div>




@endsection
