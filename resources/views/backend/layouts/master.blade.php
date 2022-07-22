<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @includeWhen(true, 'backend.layouts.components.meta')
    @includeWhen(true, 'backend.layouts.components.css')
    @yield('css')
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        @includeWhen(true, 'backend.layouts.components.sidebar')
        <div class="nk-main ">
            <div class="nk-wrap ">

                @includeWhen(true, 'backend.layouts.components.topbar')
                @includeWhen(true, 'backend.layouts.components.expand-sidebar')


                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @includeWhen(true, 'backend.layouts.components.js')
    @yield('js')
</body>

</html>
