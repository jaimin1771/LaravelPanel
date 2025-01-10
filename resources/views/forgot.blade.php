<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex justify-center items-center min-h-screen">
        <form class="w-full max-w-md p-6 bg-[#ffffff] rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Forgot Password</h2>
            
            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" 
                    placeholder="Enter your email" 
                    required>
            </div>
            
          
            
            <!-- Login Button -->
            <div class="flex items-center w-full">
                <button 
                    type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none w-full">
                    Send Link
                </button>
            </div>
        </form>
    </div>

</body>
</html>
