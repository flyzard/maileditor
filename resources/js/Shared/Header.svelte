<script>
    import { writable } from "svelte/store";
    import { inertia, page } from "@inertiajs/svelte";

    let optedUri = $page.props.optedUri;
</script>


<div class="sticky top-0 z-40 w-full backdrop-blur flex-none transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10 dark:border-slate-50/[0.06] bg-white/95 supports-backdrop-blur:bg-white/60 dark:bg-transparent">
    <div class="max-w-8xl mx-auto">
        <div class="border-b border-slate-900/10 lg:border-0 dark:border-slate-300/10 lg:mx-0">
            <div class="relative flex items-center">
                <div class="flex flex-col justify-center px-2">
                    <div class="text-xs uppercase font-bold tracking-wide">
                        Subject
                    </div>
                    <div class="text-xl">New Booking</div>
                </div>

                <div class="relative hidden lg:flex items-center ml-auto">
                    <nav class="text-sm leading-6 font-semibold text-slate-700 dark:text-slate-200">
                        <ul class="flex space-x-8">
                            <li>
                                <a href="{optedUri}/create" class="text-white font-bold py-2 px-4 rounded flex items-center" use:inertia>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 2H8C6.897 2 6 2.897 6 4V20C6 21.103 6.897 22 8 22H18C19.103 22 20 21.103 20 20V6L14 2Z"></path>
                                        <path d="M14 2V6H18"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                        <path d="M10 9H9V10H10V9Z"></path>
                                    </svg>
                                    Create
                                <a/>
                            </li>
                            <li>
                                <a href="/" class="text-white font-bold py-2 px-4 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                <a/>
                            </li>
                            <li>
                                <button class="text-white font-bold py-2 px-4 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mr-1">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16h4m-4-4h4m-4-4h4M4 4h4v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"></path>
                                    </svg>
                                    Duplicate
                                </button>
                            </li>
                            <li>
                                <button class="text-white font-bold py-2 px-4 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mr-1">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18V8m6 10V8m6 10V8M6 8a2 2 0 012-2h.93m12.14 0h.93a2 2 0 012 2v10a2 2 0 01-2 2h-5.5l-1 1-1-1H6a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Delete
                                </button>  
                            </li>
                        </ul>
                    </nav>
                    <div class="flex items-center border-l border-slate-200 ml-6 pl-6 dark:border-slate-800">
                        <div class="hidden sm:flex">
                            <div class="p-2">
                                <a href="/" class="flex items-center justify-center p-3 rounded-full transition-colors duration-100 bg-gray-600 text-white" aria-label="Phone" title="Phone">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="http://notifications.test/mailbook?selected=App%5CMail%5CNewBooking&amp;locale=en&amp;display=tablet" class="flex items-center justify-center p-3 rounded-full transition-colors duration-100 hover:bg-gray-700" aria-label="Tablet" title="Tablet">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="http://notifications.test/mailbook?selected=App%5CMail%5CNewBooking&amp;locale=en" class="flex items-center justify-center p-3 rounded-full transition-colors duration-100 hover:bg-gray-700" aria-label="Desktop" title="Desktop" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>