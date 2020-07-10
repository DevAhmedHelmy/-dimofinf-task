@extends('layouts.page',['name',$name])
@section('actions')

@endsection
@section('page-content')


<div class="col-8 offset-2">
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
          <h6 class="m-0 font-weight-bold text-primary">

          </h6>
        </div>
        <div class="card-body">
        @if(isset($company))
            <form method="POST" action="{{ route('company.update',$company->id) }}" enctype="multipart/form-data">
            @method('put')
        @else
            <form method="POST" action="{{ route('company.store')}}" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="form-group">
                <label for="name">@lang('general.name')</label>
                <input class="form-control rounded @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="@lang('general.name')" aria-label="Name" value="{{ old('name',isset($company) ?$company->name : '') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">@lang('general.email')</label>
                <input class="form-control rounded @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="@lang('general.email')" aria-label="Email" value="{{ old('email',isset($company) ?$company->email : '') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="website_url">@lang('general.website_url')</label>
                <input class="form-control rounded @error('website_url') is-invalid @enderror" id="website_url" name="website_url" type="text" placeholder="@lang('general.website_url')" aria-label="website_url" value="{{ old('website_url',isset($company) ?$company->website_url : '') }}">
                @error('website_url')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo">@lang('general.logo')</label>
                <input class="rounded form-control" id="logo" name="logo" type="file" placeholder="@lang('general.logo')" aria-label="logo">
                @error('logo')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-6">
                <button class="btn btn-info" type="submit">@lang('general.save')</button>
            </div>
        </form>
    </div>
</div>
</div>


@endsection
