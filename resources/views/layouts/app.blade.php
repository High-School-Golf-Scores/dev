<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}

                <head>
                    <!-- ... -->

                    @fluxStyles
                </head>
                <body class="min-h-screen bg-white dark:bg-gray-900">
                <flux:sidebar sticky stashable class="bg-gray-50 dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700">
                    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

                    <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
                    <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />

                    <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

                    <flux:navlist variant="outline">
                        <flux:navlist.item icon="home" href="/home-page" current>Home</flux:navlist.item>
                        <flux:navlist.item icon="inbox" badge="12" href="/tournaments">Tournaments</flux:navlist.item>
                        <flux:navlist.item icon="document-text" href="/players">Players</flux:navlist.item>
                        <flux:navlist.item icon="calendar" href="/schedule">Calendar</flux:navlist.item>
                        <flux:navlist.item icon="document-text" href="/schedule">Posts</flux:navlist.item>

                        <flux:navlist.group expandable heading="Favorites" class="hidden lg:grid">
                            <flux:navlist.item href="https://www.kshsaa.org">KSHSAA</flux:navlist.item>
                            <flux:navlist.item href="https://centrallinksgolf.org/">Central Links</flux:navlist.item>
                            <flux:navlist.item href="https://www.usga.org/rules/rules-and-clarifications/rules-and-clarifications.html#!ruletype=fr&section=rule&rulenum=1">Rules</flux:navlist.item>
                        </flux:navlist.group>
                    </flux:navlist>

                    <flux:spacer />

                    <flux:navlist variant="outline">
                        <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
                        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
                    </flux:navlist>

                    <flux:dropdown position="top" align="start" class="max-lg:hidden">
                        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin" />

                        <flux:menu>
                            <flux:menu.radio.group>
                                <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                                <flux:menu.radio>Truly Delta</flux:menu.radio>
                            </flux:menu.radio.group>

                            <flux:menu.separator />

                            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                        </flux:menu>
                    </flux:dropdown>
                </flux:sidebar>

                <flux:header class="lg:hidden">
                    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

                    <flux:spacer />

                    <flux:dropdown position="top" alignt="start">
                        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

                        <flux:menu>
                            <flux:menu.radio.group>
                                <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                                <flux:menu.radio>Truly Delta</flux:menu.radio>
                            </flux:menu.radio.group>

                            <flux:menu.separator />

                            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                        </flux:menu>
                    </flux:dropdown>
                </flux:header>

                <flux:main></flux:main>

                @fluxScripts
                </body>
            </main>
        </div>
    </body>
</html>
