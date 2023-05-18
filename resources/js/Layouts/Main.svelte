<script>
    import { writable } from "svelte/store";
    export const title = writable(null);

    import Header from "@/Shared/Header.svelte";

    import { inertia, Link } from "@inertiajs/svelte";
</script>

<svelte:head>
    <title>{$title ? `${$title} - Maileditor` : "Maileditor"}</title>
</svelte:head>

<Header />

<div class="flex flex-grow flex-shrink items-stretch overflow-hidden h-screen">
    <div
        class="hidden md:flex flex-col w-[300px] max-w-full overflow-x-hidden overflow-y-auto"
    >
        <div class="flex-col gap-[2px]">
            <a
                href="http://notifications.test/mailbook?selected=App%5CMail%5CMailbookMail&amp;display=phone&amp;locale=en"
                class="px-3 py-[3px] text-sm flex gap-1 items-center text-gray-200 hover:text-white hover:bg-gray-700 transition-colors duration-100"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4 text-blue-500 flex-shrink-0"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    />
                </svg>
                Mailbook Mail
            </a>
            <a
                href="http://notifications.test/mailbook?selected=App%5CMail%5CNewBooking&amp;display=phone&amp;locale=en"
                class="px-3 py-[3px] text-sm flex gap-1 items-center bg-gray-600 text-white group flex items-center"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-4 h-4 text-blue-500 flex-shrink-0"
                >
                    <path
                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
                    />
                    <path
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
                    />
                </svg>
                New Booking
            </a>
        </div>
    </div>
    <div class="flex flex-col flex-1 bg-gray-900">
        <div class="text-black flex-1 flex justify-center bg-[#090816]">
            <iframe
                class="w-full h-full bg-white max-w-md"
                sandbox=""
                fetchpriority="high"
                loading="eager"
                src="http://notifications.test/mailbook/content?class=App%5CMail%5CNewBooking&amp;locale=en"
            />
        </div>
    </div>
    <div
        class="flex-col justify-between gap-2 w-[300px] overflow-y-auto overflow-x-hidden hidden xl:flex"
    >
        <div class="flex flex-col p-4 divide-y divide-gray-500">
            <div class="flex flex-col py-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    Subject
                </div>
                <div class="text-sm">New Booking</div>
            </div>
            <div class="flex flex-col py-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    From
                </div>
                <div
                    class="text-sm truncate"
                    title="&quot;Carsync&quot; <noreply@carsync.de>"
                >
                    "Carsync" &lt;noreply@carsync.de&gt;
                </div>
            </div>
            <div class="flex flex-col py-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    Size
                </div>
                <div class="text-sm">8.64 KB</div>
            </div>
        </div>
        <div class="text-gray-200 text-center text-xs p-2">
            Created with <a
                href="https://github.com/Xammie/mailbook"
                target="_blank"
                class="text-white text-bold underline">mailbook</a
            >
        </div>
    </div>
</div>
