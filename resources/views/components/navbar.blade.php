<div>
    <header x-data="{ isOpen: false }" class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="-m-2.5 inline-flex
                    items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div class="hidden lg:flex lg:gap-x-12 lg:justify-center lg:items-center">
                    <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
                    <a href="/services" class="text-sm font-semibold leading-6 text-gray-900">Services</a>
                    <a href="/shop" class="text-sm font-semibold leading-6 text-gray-900">Shop</a>
                    <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
                    <a href="/signin" class="text-sm font-semibold leading-6 text-gray-900">
                        <button class="py-2 px-4 rounded-full bg-gradient-to-tr from-[#a6d34a] to-[#6fa406] ">Log in
                            <span aria-hidden="true">&rarr;</span>
                        </button></a>
                </div>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="isOpen" class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="/"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                            <a href="/services"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Services</a>
                            <a href="shop"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Shop</a>
                            <a href="contact"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
                        </div>
                        <div class="py-6">
                            <a href="/signin"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>