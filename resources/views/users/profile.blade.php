@extends('layouts.page',['name',$name])

@section('page-content')

<div class="mb-4 shadow card">
    <div class="py-3 card-header">
      <h6 class="m-0 font-weight-bold text-primary">

      </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.name')</h5>
                <span class="description-text">{{ $user->name }}</span>
                </div>

            </div>

            <div class="col-sm-6 border-left">
                <div class="description-block">
                <h5 class="description-header">@lang('general.email')</h5>
                <span class="description-text">{{ $user->email }}</span>
                </div>

            </div>
        </div>




    </div>
    </div>

@endsection
