<div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo"><em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info"><span
                                        class="lead-text">Dashboard</span></div>
                            </div>
                           
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                              
                                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle me-n1"
                                            data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">{{ Auth::user()->name }}</span><span
                                                            class="sub-text">{{ Auth::user()->email }}</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>