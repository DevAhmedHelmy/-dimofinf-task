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
        @if(isset($employee))
            <form method="POST" action="{{ route('employee.update',$employee->id) }}" enctype="multipart/form-data">
            @method('put')
        @else
            <form method="POST" action="{{ route('employee.store')}}" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="form-group">
                <label for="first_name">@lang('general.first_name')</label>
                <input class="form-control @error('first_name') is-invalid @enderror" id="name" name="first_name" type="text" placeholder="@lang('general.first_name')" aria-label="first_name" value="{{ old('first_name',isset($employee) ?$employee->first_name : '') }}" required>
                @error('first_name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">@lang('general.last_name')</label>
                <input class="form-control @error('last_name') is-invalid @enderror" id="name" name="last_name" type="text" placeholder="@lang('general.last_name')" aria-label="last_name" value="{{ old('last_name',isset($employee) ?$employee->last_name : '') }}" required>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">@lang('general.email')</label>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="@lang('general.email')" aria-label="Email" value="{{ old('email',isset($employee) ?$employee->email : '') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">@lang('general.phone')</label>
                <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="text" placeholder="@lang('general.phone')" aria-label="phone" value="{{ old('phone',isset($employee) ?$employee->phone : '') }}" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="companies">@lang('general.companies')</label>
                <div class="relative inline-block w-full">
                    <select class="form-control @error('company_id') is-invalid @enderror" name="company_id" required>
                        <option>@lang('general.choose')</option>
                        @foreach ($companies as $company)
                            <option @if(isset($employee) && $employee->company_id == $company->id) selected @endif value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>

                  </div>
                  @error('company_id')
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
