<div class="nk-apps-sidebar is-theme">
    <div class="nk-apps-brand">
        <a href="{{ route('home') }}" class="logo-link">
            <img class="logo-light logo-img"
                src="@backend(images/logo-small.png)" srcset="@backend(demo3/images/logo-small2x.png) 2x" alt="logo">
            <img
            class="logo-dark logo-img" src="../images/logo-dark-small.png"
            srcset="@backend(demo3/images/logo-dark-small2x.png) 2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body">
            <div class="nk-sidebar-content" data-simplebar>
                <div class="nk-sidebar-menu">
                    <ul class="nk-menu apps-menu">

                        <li class="nk-menu-item">
                            <a href="{{ route('chapters') }}" class="nk-menu-link" title="Chapter">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-book"></em>
                                </span>
                            </a>
                        </li>

                        <li class="nk-menu-hr"></li>

                    </ul>
                </div>

                <div class="nk-sidebar-footer">
                    <ul class="nk-menu nk-menu-md">
                        <li class="nk-menu-item">
                            <a href="javascript:;" class="nk-menu-link" title="Settings">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-setting"></em>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                <a href="javascript:;" class="toggle"
                    data-target="profileDD">
                    <div class="user-avatar">
                        <span class="text-uppercase">{{ Str::limit(Auth::user()->name, 2) }}</span>
                    </div>
                </a>
                
                <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown" data-content="profileDD">
                    <div class="dropdown-inner user-card-wrap d-none d-md-block">
                        <div class="user-card">
                            <div class="user-avatar"><span class="text-uppercase">{{ Str::limit(Auth::user()->name, 2) }}</span></div>
                            <div class="user-info">
                                <span class="lead-text">{{ Auth::user()->name }}</span>
                                <span class="sub-text text-soft">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
