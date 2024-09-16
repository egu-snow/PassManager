<nav class="px-3 navbar fixed-top" style="background-color: #44769a;">
    <a class="navbar-brand ps-2 text-light" href={{ route('acount.list') }}>pass manager</a>
    <div>
        @if (Route::has('login'))
                            <div class="flex justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="px-2 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="px-2 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                                    </div>
                        @endif
    </div>
</nav>