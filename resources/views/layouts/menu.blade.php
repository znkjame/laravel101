<nav>
    <ul>
        <li>
            <a href="{{ route('apartments.index') }}">Apartment</a>
        </li>
        <li>
            <a href="{{ route('tasks.index') }}">Task</a>
        </li>
        <li>
            <a href="{{ route('tags.index') }}"
            class="@if(\Request::routeIs('tags.*')) bg-gray-700 @endif">Tags</a>
        </li>
        @if(Auth::check())
            <a href="">{{ Auth::user()->name }}</a>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        LOGOUT
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}"
                   class="@if(\Request::routeIs('tags.*')) bg-gray-700 @endif">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}"
                   class="@if(\Request::routeIs('tags.*')) bg-gray-700 @endif">Register</a>
            </li>
        @endif

        <a href="{{ route('lang',['locale'=> 'th']) }}">TH</a>
        <a href="{{ route('lang',['locale'=> 'en']) }}">EN</a>

        <a href="{{ route('google.redirect') }}">Login with Google</a>
    </ul>
</nav>
