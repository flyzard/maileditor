<script context="module">
    import Main from "../Layouts/Main.svelte";
    import { writable } from "svelte/store";
    export const layout = Main;
    export const title = writable(null);
</script>

<script>
    export let email;

    
</script>

<svelte:head>
    <title>{$title ? `${email.name} - Maileditor` : "Maileditor"}</title>
</svelte:head>

<div class="flex flex-col flex-1 bg-gray-900">
    <div class="text-black flex-1 flex justify-center bg-[#090816]">
        <iframe class="w-full h-full bg-white max-w-md" sandbox="" fetchpriority="high" loading="eager" src="http://notifications.test/mailbook/content?class=App%5CMail%5CNewBooking&amp;locale=en"/>
    </div>
</div>
<div class="flex-col justify-between gap-2 w-[300px] overflow-y-auto overflow-x-hidden hidden xl:flex">
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
</div>