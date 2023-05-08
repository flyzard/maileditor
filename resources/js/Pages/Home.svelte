<script context="module">
    import Main from "../Layouts/Main.svelte";
    export const layout = Main;
</script>

<script>
    let cenas = 1;
    let coiso = "sdfg";
</script>

<h1>Home sfdbdf</h1>

<p>Current count: {cenas}</p>

<button on:click={() => cenas++}>
    Increment {coiso}
</button>
