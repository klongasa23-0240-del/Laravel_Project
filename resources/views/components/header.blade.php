<nav class="fixed inset-x-0 top-0 z-30 border-b border-gray-300 bg-white/90 backdrop-blur">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            
            <!-- Brand -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="h-8 w-8 rounded-xl bg-gradient-to-br from-red-400 via-red-500 to-red-600
                            shadow-md shadow-red-400/40 group-hover:shadow-red-500/60 
                            group-hover:scale-105 transition-all"></div>

                <div class="flex flex-col">
                    <span class="text-sm font-semibold tracking-tight text-gray-800 group-hover:text-red-700 transition">
                        Kristine Longasa
                    </span>
                    <span class="text-[11px] text-gray-600 leading-none">
                        CS Student • Web Developer • Full-Stack Dev
                    </span>
                </div>
            </a>

            <!-- Desktop nav -->
            <div class="hidden md:flex items-center gap-6 text-sm">

                <a href="{{ url('/') }}" 
                   class="text-gray-700 hover:text-red-600 transition">Home</a>

                <a href="{{ url('/#projects') }}" 
                   class="text-gray-700 hover:text-red-600 transition">Projects</a>

                <a href="{{ url('/#contact') }}" 
                   class="text-gray-700 hover:text-red-600 transition">Contact</a>

                @auth
                    <!-- LOGOUT BUTTON -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="px-3 py-1.5 rounded-full border border-gray-500 
           text-gray-700 hover:text-red-600 hover:border-red-600
           bg-white shadow-sm text-xs font-medium transition">
                            Logout
                        </button>
                    </form>

                @else

                    <!-- Login link -->
                    <a href="{{ route('login.form') }}"
                       class="text-xs text-gray-600 hover:text-red-600 transition">
                        Login
                    </a>

                    <!-- Register button -->
                    <a href="{{ route('register.form') }}"
                       class="px-3 py-1.5 rounded-full bg-red-600 hover:bg-red-700 
                              text-xs font-medium shadow-md shadow-red-400/40 transition">
                        Sign up
                    </a>

                @endauth

            </div>
        </div>
    </div>
</nav>
