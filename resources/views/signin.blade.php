<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Sign In</h1>

        @if(session('success'))
            <div class="text-green-600 bg-green-100 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="text-red-600 bg-red-100 p-3 rounded mb-4">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('create') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your name"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <div>
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Enter your phone number"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email address"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 rounded hover:bg-blue-600 transition">
                Sign In
            </button>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-700">Already have an account? 
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>
            </p>
        </div>
    </div>
</body>
</html>
