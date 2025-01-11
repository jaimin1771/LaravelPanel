<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-blue-600 text-white w-64 hidden md:block">
            <div class="p-6">
                <h2 class="text-2xl font-bold">QR Scanner</h2>
            </div>
            <nav class="mt-6">
                <a href="{{route('home')}}" class="block py-2 px-4 hover:bg-blue-700">Home</a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-700">Scan History</a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-700">Generate QR</a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold"></h1>
                    <div class="flex items-center">
                        <a href="{{route('logout')}}" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Logout</a>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                <div class="w-[100%] ms-auto">
                    @yield('content') <!-- Dynamic content will be injected here -->
                </div>
            </main>
        </div>
    </div>
</body>
</html>

