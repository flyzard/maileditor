<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    @verbatim
    <script type="module" src="http://notifications.test:5173/@vite/client"></script>
    @endverbatim
    <link rel="stylesheet" href="http://notifications.test:5173/resources/css/theme.scss"/>
    {{-- {{ Vite::useBuildDirectory('vendor/flyzard/maileditor')->withEntryPoints(['resources/js/app.js']) }} --}}

    {{-- TODO: Remove the script and links before deployment --}}
    @inertiaHead
  </head>
  <body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
    @inertia

    @verbatim
    <script type="module" src="http://notifications.test:5173/@vite/client"></script>
    @endverbatim
    <script type="module" src="http://notifications.test:5173/resources/js/app.js"></script>
  </body>
</html>
