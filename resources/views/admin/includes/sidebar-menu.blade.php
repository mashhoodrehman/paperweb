<div class="br-sideleft-menu">
  @foreach($sidemenu as $menu)
  @if($menu['isParent'] == "true")
        <a href="#" class="br-menu-link {{ request()->is('test') ? 'active' : '' }}">
          <div class="br-menu-item">
            <i class="menu-item-icon icon {{$menu['icon'] ? $menu['icon'] : 'ion-ios-home-outline'}} tx-22"></i>
            <span class="menu-item-label">{{$menu['name']}}</span>
          </div><!-- menu-item -->
        </a>
        <ul class="br-menu-sub nav flex-column " style="display:  ">
        @foreach($menu->childmenu as $childmenu)
         <li class="nav-item"><a href="{{route('admin.index' , $childmenu['slug'])}}"  class="nav-link">{{$childmenu['name']}}</a></li>
        @endforeach
        </ul>
        <!-- br-menu-link -->
        @else
        <a href="{{route('admin.index' , $menu['slug'])}}" class="br-menu-link {{ request()->is('test') ? 'active' : '' }}">
          <div class="br-menu-item">
            <i class="menu-item-icon icon {{$menu['icon'] ? $menu['icon'] : 'ion-ios-home-outline'}} tx-22"></i>
            <span class="menu-item-label">{{$menu['name']}}</span>
          </div><!-- menu-item -->
        </a>
        <!-- br-menu-link -->
        @endif
        @endforeach
      </div><!-- br-sideleft-menu -->