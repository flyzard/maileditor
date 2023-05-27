<script context="module">
    import Explorer from "@/Layouts/Explorer.svelte";
    import { writable } from "svelte/store";

    export const layout = Explorer;
    export const title = writable(null);
</script>
<script>
    import { useForm, inertia, page } from '@inertiajs/svelte';
    let optedUri = '/' + $page.props.optedUri;
  
    let form = useForm({
      name: '',
      content: '',
      envelope_id: 1,
    });
  
    const submit = () => {
      $form.post(optedUri, {
        onSuccess: () => {
          inertia.visit('/');
        },
      });
    };
  </script>
  
  <div class="flex flex-col flex-1 bg-gray-900">
  
    <div class="text-black flex-1 flex justify-center bg-[#090816]">
  
      <div class="w-full h-full bg-white max-w-md">
  
        <form class="flex flex-col h-full" on:submit|preventDefault={submit}>
  
            <div class="flex flex-col flex-1 p-4">
                <div class="flex flex-col py-2">
                    <label for="name" class="text-xs font-bold tracking-wide uppercase">Name</label>
                    <input type="text" id="name" class="text-sm" placeholder="A unique name identifier for this field" bind:value={$form.name}>
                    {#if $form.errors.email}
                        <div class="text-red-600 text-sm font-medium">{$form.errors.email}</div>
                    {/if}
                </div>

                <div class="flex flex-col py-2 h-full pb-0">
                    <label for="content" class="text-xs font-bold tracking-wide uppercase">Content</label>
                    <textarea name="content" id="content" class="text-sm" placeholder="The content for this field" bind:value={$form.content} style="height: calc(100% - 4rem)"></textarea>
                    {#if $form.errors.email}
                        <div class="text-red-600 text-sm font-medium">{$form.errors.content}</div>
                    {/if}
                </div>
                <div class="flex flex-col p-4 pt-0">
                    <button type="submit" disabled={$form.processing} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded { $form.processing ? 'opacity-50 cursor-not-allowed' : '' }">
                        {$form.processing ? 'Submitting...' : 'Submit'}
                    </button>
                </div>
            </div>
  
        </form>
  
      </div>
  
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