<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Config::get('app.name', 'Laravel Livewire'); }}</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <!-- Page Heading -->
        @if (isset($header))
        <nav class="navbar bg-body-tertiary mb-3">
            <div class="container-fluid">
                {{ $header }}
            </div>
        </nav>
        @endif
        {{ $slot }}
    </div>
</body>

</html>
