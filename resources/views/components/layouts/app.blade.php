<html class="bg-gray-50 text-gray-600">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="container mt-16">
        {{ $slot }}

        <footer class="pb-8 mt-16 text-center">
            Demo by <a href="https://benjamincrozat.com" class="font-bold underline">Benjamin Crozat</a>.
        </footer>
    </div>
</html>
