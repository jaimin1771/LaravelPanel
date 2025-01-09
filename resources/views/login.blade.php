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
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login to Your Account</h2>
    <form id="loginForm" class="space-y-4" action="{{route('authenticate')}}" method="GET">
      <!-- Username or Email -->
      <div>
        <input 
          type="email" 
          name="email" 
          id="email" 
          placeholder="Email" 
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
          required
        />
      </div>
      <!-- Password -->
      <div>
        <input 
          type="password" 
          name="password" 
          id="password" 
          placeholder="Password" 
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
          required
        />
      </div>
      <!-- Login Button -->
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
      >
        Login
      </button>
      <!-- Links -->
      <div class="text-sm text-center mt-4">
        <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
      </div>
      <div class="text-sm text-center">
        <p>Don't have an account? <a href="{{route('signin')}}" class="text-blue-500 hover:underline">Register here</a></p>
      </div>
    </form>
  </div>
</body>
</html>
