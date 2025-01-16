<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>HomePage</title>
</head>

<body class="font-sans leading-normal tracking-normal text-gray-800">
    <div class="w-full">
        <nav class="w-full bg-gray-100 p-2 shadow-md z-10">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4">
                <div class="w-24">
                    <img src="{{ asset('assets/home_page_img/360logo.png') }}" alt="Logo" class="max-w-full h-auto">
                </div>
                <div class="flex space-x-4">
                    @if(auth()->check())
                        <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                        <a href="{{ route('signin') }}" class="text-gray-700 hover:text-blue-600 font-medium">Sign In</a>
                    @endif
                </div>
            </div>
        </nav>

        <section class="flex flex-col md:flex-row items-center justify-center px-10 md:px-3 py-10 space-y-8 lg:space-y-0 lg:space-x-8">
            <div class="xl:w-[34%] sm:w-[40%] w-full">
                <img src="{{ $data[0]->value }}" alt="Hero Image" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-[50%] flex flex-col md:items-start items-center space-y-4 m-0 md:m-[5%]">
                @if($data->isEmpty())
                    <p>No data found.</p>
                @else
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800">{{ $data[1]->value }}</h1>
                    <p class="text-lg text-gray-600">{{ $data[2]->value }}</p>
                @endif
            </div>
        </section>
        <section class="flex flex-col md:flex-row items-center justify-center px-10 md:px-3 py-10 space-y-8 lg:space-y-0 lg:space-x-8">
            <div class="w-full md:w-[50%] flex flex-col md:items-start items-center space-y-4 m-0 md:m-[5%]">
                @if($data->isEmpty())
                    <p>No data found.</p>
                @else
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800">{{ $data[4]->value }}</h1>
                    <p class="text-lg text-gray-600">{{ $data[5]->value }}</p>
                @endif
            </div>
            <div class="xl:w-[34%] sm:w-[40%] w-full">
                <img src="{{ $data[3]->value }}" alt="Hero Image" class="w-full rounded-lg shadow-lg">
            </div>
        </section>
        <section class="flex flex-col md:flex-row items-center justify-center px-10 md:px-3 py-10 space-y-8 lg:space-y-0 lg:space-x-8">
            <div class="xl:w-[34%] sm:w-[40%] w-full">
                <img src="{{ $data[6]->value }}" alt="Hero Image" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-[50%] flex flex-col md:items-start items-center space-y-4 m-0 md:m-[5%]">
                @if($data->isEmpty())
                    <p>No data found.</p>
                @else
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800">{{ $data[7]->value }}</h1>
                    <p class="text-lg text-gray-600">{{ $data[8]->value }}</p>
                @endif
            </div>
        </section>
        
    </div>
</body>

</html>
