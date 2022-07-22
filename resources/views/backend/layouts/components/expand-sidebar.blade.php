<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">

            @if (request()->routeIs('home'))

            <li class="nk-menu-item">
                <a href="index.html" class="nk-menu-link">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-dashboard"></em>
                    </span>
                    <span class="nk-menu-text">Dashboard</span>
                </a>
            </li>
                
            @endif

            @if (request()->routeIs('chapters') || request()->routeIs('create.paragraph'))

            <li class="nk-menu-item">
                <a href="{{ route('chapters') }}" class="nk-menu-link">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-dashboard"></em>
                    </span>
                    <span class="nk-menu-text">Chapters</span>
                </a>
            </li>

            @can('admin')
                
            <li class="nk-menu-item">
                <a href="{{ route('create.paragraph') }}" class="nk-menu-link">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-dashboard"></em>
                    </span>
                    <span class="nk-menu-text">Create Chapter</span>
                </a>
            </li>

            @endcan
                
            @endif
         
            
        </ul>
    </div>
</div>
