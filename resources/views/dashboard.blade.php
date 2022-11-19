<!DOCTYPE html>
<html>
    @include('dashboard.header')
   
    <body>
        <div class="header no-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <h1>FaceClone</h1>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <ul class="header-menu pull-right">
                            <li><a href="#" class="">Requests</a></li>
                            <li><a href="#" class="">Messages</a></li>
                            <li><a href="#" class="">Notifications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">

                    @include('dashboard.left')

                    @yield('content')

                    @include('dashboard.right')
                     
                    @include('dashboard.chats') 

            </div>
        </div>

        @include('dashboard.footer')
        
        @include('dashboard.script')
        
    </body>
</html>
