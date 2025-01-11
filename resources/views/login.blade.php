<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <a href="{{route('Index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4">
                <path
                    d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
            </svg>
        </a>
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login to Your Account</h2>
        <form id="loginForm" class="space-y-4" action="{{ route('authenticate') }}" method="GET">
            <!-- Error Message -->
            @if (session('error'))
                <div class="mb-4 text-sm text-red-600 bg-red-100 border border-red-400 rounded p-2">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-4 text-sm text-green-600 bg-green-100 border border-green-400 rounded p-2">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Username or Email -->
            <div>
                <input type="email" name="email" id="email" placeholder="Email"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required />
            </div>
            <!-- Password -->
            <div>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    required />
            </div>
            <!-- Login Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                Login
            </button>
            <!-- Links -->
            <div class="text-sm text-center mt-4">
                <a href="{{ route('forgot') }}" class="text-blue-500 hover:underline">Forgot Password?</a>
            </div>
            <div class="text-sm text-center">
                <p>Don't have an account? <a href="{{ route('signin') }}" class="text-blue-500 hover:underline">Register
                        here</a></p>
            </div>
        </form>
    </div>
</body>

</html>
