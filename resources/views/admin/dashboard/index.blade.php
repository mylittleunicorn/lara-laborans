<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @bukStyles

</head>

<body>
  <div class="flex">
    <div id="sidenav" class="absolute hidden md:block  md:relative top-0 w-64 h-screen bg-white border-r border-gray-200 ">
      <div class="flex flex-row items-center justify-center py-3">
        <h1 class="text-lg font-bold text-gray-800 dark:text-gray-200">Laborans</h1>
      </div>
      <div class=" bg-white text-gray-500 dark:text-gray-400">
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-teal-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            <button id="dropDown" class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
              <span class="inline-flex items-center">
                <x-bx-printer class="w-5 h-5" />
                <span class="ml-4">Master Data</span>
              </span>
              <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div id="dropDownItem" class="hidden">
              <ul class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                  <a class="w-full" href="pages/create-account.html">
                    Users
                  </a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                  <a class="w-full" href="/programstudy">
                    Program Study
                  </a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                  <a class="w-full" href="/lab">
                    Labs
                  </a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                  <a class="w-full" href="pages/blank.html">Blank</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="forms.html">
              <x-bx-cake class="w-5 h-5" />
              <span class="ml-4">Items</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="cards.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
              <span class="ml-4">Cards</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="charts.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
              </svg>
              <span class="ml-4">Charts</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="buttons.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
              </svg>
              <span class="ml-4">Buttons</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="modals.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
              </svg>
              <span class="ml-4">Modals</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="tables.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Tables</span>
            </a>
          </li>
        </ul>

        <div class="flex flex-col justify-center bottom-0 p-2 shadow-xl mx-6 mt-20">
          <div class="w-full justify-center">
            <img src="" alt="" class="w-20 h-20 rounded-full justify-center">
          </div>
          <div class="w-full">
            <p class="my-8">Lorem ipsum dolor sit </p>
            <button class=" w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Profile
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </div>

        </div>
      </div>

    </div>
    <div class="w-full ">
      <div class="w-full flex justify-between md:justify-around p-3 md:p-4 items-center">
        <x-bxl-periscope class="w-8 h-8 md:hidden text-blue-500" />
        <form action="">
          <input type="text" class="border-b border-blue-500" placeholder="serach......">
        </form>
        <button id="side" class="md:hidden">
          <x-bx-menu class="w-8 h-8  text-blue-500" />
        </button>
      </div>
      <div class="p-2 md:p-4">
        @yield('content')
      </div>
    </div>
  </div>
  @bukScripts
  @yield('script')
  <script type="module">
    $(document).ready(function() {
      $("#side").click(function(e) {
        e.stopPropagation();
        $("#sidenav").addClass('absolute md:relative')
        $("#sidenav").toggle();
      });
      $("#dropDown").click(function(e) {
        e.stopPropagation();
        $("#dropDownItem").toggle();

      });


    });
  </script>
</body>

</html>