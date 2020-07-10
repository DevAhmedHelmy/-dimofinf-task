<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar - Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="mx-3 sidebar-brand-text">Management</div>
    </a>

    {{-- Divider --}}
    <hr class="my-0 sidebar-divider">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item @if(request()->is('/')) active-nav-link @endif">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> @lang('general.dashboard')</span></a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider">

    {{-- Heading --}}
    <div class="sidebar-heading">

    </div>
    <li class="nav-item @if(request()->is('users') || request()->is('users/*')) active-nav-link @endif">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>@lang('general.users')</span></a>
    </li>
    {{-- Nav Item - Pages Collapse Menu --}}
    <li class="nav-item @if(request()->is('company') || request()->is('company/*')) active-nav-link @endif">
        <a class="nav-link" href="{{ route('company.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>@lang('general.companies')</span></a>
      </li>

    {{-- Nav Item - Utilities Collapse Menu --}}
    <li class="nav-item @if(request()->is('employee') || request()->is('employee/*')) active-nav-link @endif">
        <a class="nav-link" href="{{ route('employee.index') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>@lang('general.employees')</span></a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler (Sidebar) --}}
    <div class="text-center d-none d-md-inline">
      <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

  </ul>
