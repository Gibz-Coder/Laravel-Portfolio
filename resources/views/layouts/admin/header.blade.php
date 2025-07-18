<header>
    <nav>
        <ul>
            <li><img src="{{ asset('assets/img/logo.png') }}" alt=""></li>
        </ul>
        <ul class="header-profile">
            @if (Auth::user())
            <li class="avatar-item">
                @if (Auth::user()->image)
                    <img src="{{ asset('assets/img/' . Auth::user()->image) }}" alt="" class="avatar-img">
                @else
                <img src="{{ asset('assets/img/avatar.jpg') }}" alt="" class="avatar-img">
                @endif
            </li>
            <li>
                @if (Auth::user()->email)
                    <span>{{ Auth::user()->email }}</span>
                @else
                <span>Guest</span>                    
                @endif
            </li>
            @endif
        </ul>
    </nav>
    <span class="header-profile-nav">
        <span> <i class="fa fa-sort-up"></i></span>
        <ul>
            <li><a href="{{ route('admin.abouts.edit') }}">Profile</a></li>
            <hr class="hr">
            <li><a href="{{ route('admin.messages.index') }}">Message</a></li>
            <hr class="hr">
            <li>
                <a href="{{ route('logout') }}">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <i class="fa fa-sign-out"></i>
                        <span onClick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </span>
                    </form>
                </a>
            </li>
        </ul>
    </span>
</header>