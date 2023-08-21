<html class="bg-gray-50 text-gray-600">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: '1rem',
                },
            },
        }
    </script>

    <div class="container py-16">
        {{ $slot }}
    </div>
</html>
