{{-- <div class="col-sm-3 left-sidebar">
    <ul>
        <li><a href="./dashboard.html" class="active">News Feed</a></li>
        <li><a href="./settings.html" class="active">Settings</a></li>
        <li>
        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button type="submit" class="btn btn-danger" >Logout</button> 
        </form>
        </li>
    </ul>
</div> --}}


<div class="col-sm-3">
    <div class="sidebar">
        <li><a href="{{ route("dashboard") }}" class="active">News Feed</a></li>
        <li><a href="{{ route('profile.index') }}" class="active">Profile</a></li>
        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button type="submit" class="btn btn-danger" >Logout</button> 
        </form>
        

    </div>
</div>

