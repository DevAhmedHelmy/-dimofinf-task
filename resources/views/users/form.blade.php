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
        @if(isset($user))
            <form method="POST" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
            @method('put')
        @else
            <form method="POST" action="{{ route('users.store')}}" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="form-group">
                <label for="name">@lang('general.name')</label>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="@lang('general.name')" aria-label="name" value="{{ old('name',isset($user) ?$user->name : '') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">@lang('general.email')</label>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="@lang('general.email')" aria-label="Email" value="{{ old('email',isset($user) ?$user->email : '') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">@lang('general.password')</label>
                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="text" placeholder="@lang('general.password')" aria-label="password" @if(!isset($user)) required @else '' @endif>
                @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">@lang('general.password_confirmation')</label>
                <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="text" placeholder="@lang('general.password_confirmation')" aria-label="password_confirmation"  >

            </div>
            <div class="mt-6">
                <button class="btn btn-info" type="submit">@lang('general.save')</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
