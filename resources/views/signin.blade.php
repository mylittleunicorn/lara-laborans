<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <main class="mt-0 transition-all duration-200 ease-in-out ps">
    <div class="pb-40 pt-24 m-4 min-h-50-screen items-start rounded-xl p-0 relative overflow-hidden flex bg-cover bg-center bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-cover.jpg')]">
      <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover opacity-60 bg-gradient-to-tl from-zinc-800 to-zinc-700"></span>
      <div class="container z-1">
        <div class="flex flex-wrap justify-center -mx-3">
          <div class="w-full max-w-full px-5 mx-auto text-center shrink-0 lg:flex-0 lg:w-5/12">
            <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
            <p class="text-white ">Use these awesome forms to login or create new account in your project for free.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="flex flex-wrap justify-center -mx-3 -mt-48 lg:-mt-36 md:-mt-56">
        <div class="w-full max-w-full px-6 mx-auto shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
          <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6">
              <h3>Welcome back</h3>
              <p class="mb-0">Enter your email and password to sign in</p>
            </div>
            <div class="flex-auto p-6 pt-0 text-center">
              <form role="form" class="text-left">
                <div class="mb-4">
                  <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Email</label>
                  <input type="email" class="text-sm focus:shadow-primary-outline dark:bg-slate-850 placeholder:text-gray-500 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                </div>
                <div class="mb-4">
                  <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Password</label>
                  <input type="password" class="text-sm focus:shadow-primary-outline dark:bg-slate-850 placeholder:text-gray-500 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="min-h-6 mb-0.5 flex items-center pl-12 text-left">
                  <input id="rememberMe" class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" checked="">
                  <label class="ml-2 text-sm font-normal cursor-pointer select-none text-slate-700" for="rememberMe">Remember me</label>
                </div>
                <div class="mb-4 text-center">
                  <button type="button" class="inline-block w-full px-5 py-2.5 mt-6 mb-2 text-sm font-bold text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs leading-normal tracking-tight-rem bg-150 bg-x-25 bg-blue-500 active:-translate-y-px active:text-black hover:active:text-white">Sign in</button>
                </div>
                <div class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center py-0 px-1 sm:px-6">
                  <p class="mx-auto mb-4 text-sm font-normal">Don't have an account? <a href="../../../pages/authentication/signup/basic.html" class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Sign up</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
  </main>
</body>

</html>