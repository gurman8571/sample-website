<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<div>

    <nav class="bg-green-500 mt-2 mx-2 rounded-md shadow-sm">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!--
                  Icon when menu is open.
                  Heroicon name: outline/x
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0 flex items-center">
              <p class="text-white text-capitalize text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">sample </p>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="{{route('index.user')}}" class=" text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Users</a>

                  <a href="{{route('add.blog')}}" class="text-white   px-3 py-2 rounded-md text-sm font-medium">Add blog</a>
                         <a href="{{route('index.blog')}}" class="text-white   px-3 py-2 rounded-md text-sm font-medium">Blogs</a>

                  @if (Route::has('login'))

                  @auth
                      <a></a>
                  @else
                      <a href="{{ route('login') }}" class="text-white   px-3 py-2 rounded-md text-sm font-medium">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="text-white   px-3 py-2 rounded-md text-sm font-medium">Register</a>
                      @endif
                  @endauth
                  @endif

                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


              <!-- Profile dropdown -->
              <div class="ml-3 relative">
                <div>

                    @if(Auth::check())
                        <button type="button"  onclick="toggle()"  class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"  aria-expanded="false" aria-haspopup="true">

                        <img class="h-8 w-8 rounded-full" src="{{ asset('profile')}}/{{Auth::user()->Profile_image}}" alt="">
                        <div type="button" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="elementId">
                            <!-- Active: "bg-gray-100", Not Active: "" -->

                            <a href="{{ route('logout') }}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Log out</a>
                          </div>



                    @endif
                 </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->



              </div>
            </div>
          </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-blue-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Profile</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Gallery</a>

          </div>
        </div>
      </nav>

    <script>
        function toggle() {
    var x = document.getElementById("elementId");
    if (x.style.display === "none") {
      x.style.display = "block";
    }
    else {
      x.style.display = "none";
    }
    }
    </script>

</div>
