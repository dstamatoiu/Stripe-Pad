<!-- Uncomment for super top header banner -->

<!-- <div class="flex items-center gap-x-6 bg-red-800 px-6 py-2.5 sm:px-3.5 hidden  sm:flex sm:before:flex-1">
  <p class="text-sm leading-6 text-white">
    <a href="#">
      <strong class="font-semibold">Welcome!</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Get a 20% discount with <strong>"WELCOME20"</strong> coupon code
    </a>
  </p>
  <div class="flex flex-1 justify-end">
    
  </div>
</div>
 -->


<div class="bg-transparent  shadow-lg ">
  <header class="mx-auto w-full px-3 md:px-10 z-50   relative   ">
    <nav class="flex items-center justify-between p-6 lg:px-8 " aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="<?= HOMEPAGE_URL ?>" class="-m-1.5 p-1.5 text-gray-100 hover:text-red-500 font-bold">
          <span class="sr-only"><?= APP_NAME ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
          </svg>
          <span class="nunito"><?= APP_NAME ?></span>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button id="button_open_mobile_menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 items-center">


        <a href="<?= APP_BASE_URL ?>documentation" class="text-md font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-red-500 rounded-full">Documentation</a>
        <!-- <a href="<?= APP_BASE_URL ?>screencasts" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-red-500 rounded-full">Screencasts</a> -->
        <!-- <a href="<?= APP_BASE_URL ?>support" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-red-500 rounded-full">Premium Support</a> -->

        <a href="https://www.github.com/natzar/Stripe-Pad" target="_blank" class="text-base font-semibold leading-6 text-gray-600 px-3 py-1 hover:bg-gray-900 hover:text-red-500 rounded-full"> <svg class="h-6 w-6 inline " fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
          </svg> Github</a>






      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="login" class="text-sm font-semibold leading-6 text-gray-600">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobile_menu">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only"><?= APP_NAME ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="w-8 h-8 inline items-center">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
            </svg>
          </a>
          <button type="button" id="button_close_mobile_menu" class="-m-2.5 rounded-md p-2.5 text-gray-400">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/25">
            <div class="space-y-2 py-6">



              <a href="<?= APP_BASE_URL ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Home</a>

              <a href="<?= APP_BASE_URL ?>documentation" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Documentation</a>

              <a href="https://www.github.com/natzar/Stripe-Pad" target="_blank" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Github</a>
              <!-- 


                <a href="<?= APP_BASE_URL ?>examples" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Examples</a>

                <a href="https://github.com/natzar/Stripe-Pad/wiki" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Documentation</a> -->




            </div>
            <div class="py-6">




              <a href="<?= APP_DOMAIN ?>login" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Login</a>
              <a href="<?= APP_DOMAIN ?>signup" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-400 hover:bg-gray-800">Sign Up</a>


            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</div>