<script>
    import { writable } from "svelte/store";
    export const title = writable(null);

    import Header from "@/Shared/Header.svelte";
</script>

<svelte:head>
    <title>{$title ? `${$title} - Maileditor` : "Maileditor"}</title>
</svelte:head>

<Header />

<div class="flex flex-grow flex-shrink items-stretch overflow-hidden h-screen">
    <slot />
</div>