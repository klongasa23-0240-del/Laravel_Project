<nav class="fixed inset-x-0 top-0 z-30 border-b border-gray-300 bg-white/90 backdrop-blur">
    <div class="container mx-auto px-4">
        {{-- Taller bar --}}
        <div class="flex items-center justify-between min-h-[88px] md:min-h-[96px] py-3 md:py-5">
            
            <!-- Brand (bigger) -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 md:gap-4 group">
                <div class="h-10 w-10 md:h-12 md:w-12 rounded-xl bg-gradient-to-br from-red-400 via-pink-500 to-purple-600
                            shadow-md shadow-red-400/40 group-hover:shadow-purple-500/60 
                            group-hover:scale-105 transition-all"></div>

                <div class="flex flex-col leading-tight">
                    <span class="text-lg md:text-xl font-semibold tracking-tight text-gray-800 group-hover:text-purple-700 transition">
                        Kristine Longasa
                    </span>
                    <span class="text-[12px] md:text-sm text-gray-600">
                        CS Student • Web Developer • Full-Stack Dev
                    </span>
                </div>
            </a>

            <!-- Desktop nav (bigger text & gaps) -->
            <div class="hidden md:flex items-center gap-8 text-base">

                <a href="{{ url('/') }}" 
                   class="text-gray-800 hover:text-purple-600 transition">Home</a>

                <a href="{{ url('/#projects') }}" 
                   class="text-gray-800 hover:text-purple-600 transition">Projects</a>

                <a href="{{ url('/#contact') }}" 
                   class="text-gray-800 hover:text-purple-600 transition">Contact</a>

                @auth

                    <!-- Dashboard Link -->
                            <a href="{{ route('dashboard') }}" 
                            class="text-gray-700 hover:text-purple-600 transition">
                                Dashboard
                            </a>
                    <!-- LOGOUT BUTTON (bigger) -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="px-5 py-2 rounded-full border border-gray-600 
                                       text-gray-700 hover:text-purple-600 hover:border-purple-600
                                       bg-white shadow-sm font-medium transition">
                            Logout
                        </button>
                    </form>
                @else
                    <div class="flex items-center gap-4">
                        <!-- Login link -->
                        <a href="{{ route('login') }}"
                           class="px-5 py-2 rounded-full border border-purple-600 text-purple-700 hover:bg-purple-50 transition">
                            Login
                        </a>

                        <!-- Register button -->
                        <a href="{{ route('register.form') }}"
                           class="px-5 py-2 rounded-full bg-purple-600 hover:bg-purple-700 
                                  text-white font-semibold shadow-md shadow-purple-400/40 transition">
                            Sign up
                        </a>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</nav>
