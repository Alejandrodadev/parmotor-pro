@php
  $configData = Helper::appClasses();
  $user = \Auth::user();

  $userRole = $user->getRoleNames()->first();

  // Filter menu based on role
  $filteredMenu = array_filter($menuData[0]->menu, function ($item) use ($userRole) {
    if (isset($item->role) && !in_array($userRole, $item->role)) {
        return false;
    }
    if (isset($item->submenu)) {
        $item->submenu = array_filter($item->submenu, function ($item) use ($userRole) {
            if (isset($item->role) && !in_array($userRole, $item->role)) {
                return false;
            }
            return true;
        });
    }
    return true;
  });
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  @if(!isset($navbarFull))
    <div class="app-brand demo">
      <a href="{{url('/')}}" class="app-brand-link">
        <span> <img src="{{ asset('assets/images/logo/small.png') }}" alt="" width="25" height="40"></span>
        <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>
  @endif

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    @foreach ($filteredMenu as $menu)

      {{-- adding active and open class if child is active --}}

      {{-- menu headers --}}
      @if (isset($menu->menuHeader))
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">{{ $menu->menuHeader }}</span>
        </li>

      @else

        {{-- active menu method --}}
        @php
          $activeClass = null;
          $currentRouteName = Route::currentRouteName();

          if ($currentRouteName === $menu->slug) {
          $activeClass = 'active';
          }
          elseif (isset($menu->submenu)) {
          if (gettype($menu->slug) === 'array') {
          foreach($menu->slug as $slug){
          if (str_contains($currentRouteName,$slug) and strpos($currentRouteName,$slug) === 0) {
          $activeClass = 'active open';
          }
          }
          }
          else{
          if (str_contains($currentRouteName,$menu->slug) and strpos($currentRouteName,$menu->slug) === 0) {
          $activeClass = 'active open';
          }
          }

          }
        @endphp

        {{-- main menu --}}
        <li class="menu-item {{$activeClass}}">
          <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}"
             class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}"
             @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
            @isset($menu->icon)
              <i class="{{ $menu->icon }}"></i>
            @endisset
            <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
            @isset($menu->badge)
              <div class="badge bg-label-{{ $menu->badge[0] }} rounded-pill ms-auto">{{ $menu->badge[1] }}</div>

            @endisset
          </a>

          {{-- submenu --}}
          @isset($menu->submenu)
            @include('layouts.sections.menu.submenu',['menu' => $menu->submenu])
          @endisset
        </li>
      @endif
    @endforeach
  </ul>

</aside>
