<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KGCA | Kansas Golf Coaches Association' }}</title>

    <script src="//cdn.tailwindcss.com"></script>
    <script defer src="http://alpine.test/packages/ui/dist/cdn.js"></script>
    <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">
    @livewireStyles
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.7-beta.0/dist/cdn.min.js"></script>

</head>
<body>
    <main class="mx-auto flex justify-center px-8 lg:px-16">
        <div class="py-12 w-full max-w-[50rem]">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
</body>
</html>
