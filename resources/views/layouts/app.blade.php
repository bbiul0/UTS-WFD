<!DOCTYPE html>
<!-- untuk basenya -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-150 p-6">
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>
