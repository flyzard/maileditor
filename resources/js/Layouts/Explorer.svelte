<script>
    import { writable } from "svelte/store";
    import Main from "../Layouts/Main.svelte";
    export const layout = Main;
    export const title = writable(null);

    import MailLink from "@/Shared/MailLink.svelte";

    import { inertia, Link } from "@inertiajs/svelte";
</script>

<svelte:head>
    <title>{$title ? `${$title} - Maileditor` : "Maileditor"}</title>
</svelte:head>

<Main>
    <div class="flex flex-grow flex-shrink items-stretch overflow-hidden h-screen">
        <div class="hidden md:flex flex-col w-[300px] max-w-full overflow-x-hidden overflow-y-auto">
            <div class="flex-col gap-[2px]">
                <MailLink name="Same Name", url="/dfbxfgb"></MailLink>
                <MailLink name="Active one", url="/maileditor"></MailLink>
            </div>
        </div>
        <slot />
    </div>
</Main>
