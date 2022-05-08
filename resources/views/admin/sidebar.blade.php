<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('dashboard')}}">
            <div class="logo-img">
               <img height="30" width="160px" src="{{ asset('img/logo.png')}}" class="header-brand-img" title="RADMIN">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment2 == 'inventory') ? 'active' : '' }}">
                    <a href="{{route('admin')}}"><i class="ik ik-home"></i><span>{{ __('Dashboard')}}</span></a>
                </div>

                <!-- start admin pages -->
                            {{-- admin redevable --}}
                            <div class="nav-item {{ ($segment2 == 'inventory') ? 'active' : '' }}">
                                <a href="{{route('redevables.index')}}"><i class="ik ik-user"></i><span>{{ __('Redevable')}}</span></a>
                            </div>
                            {{-- admin autorisation --}}
                            <div class="nav-item {{ ($segment2 == 'inventory') ? 'active' : '' }}">
                                <a href="{{route('autorisation.index')}}"> <i class="ik ik-list"></i><span>{{ __('Autorisation')}}</span></a>
                            </div>
                            {{-- admin payement --}}
                             <div class="nav-item {{ ($segment2 == 'inventory') ? 'active' : '' }}">
                                <a href="{{route('payement.index')}}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Payement')}}</span></a>
                            </div>

                           >

                <!-- end admin pages -->


        </div>
    </div>
</div>
