<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="grid grid-rows-3 min-h-screen">
    <nav class="px-6 mb-3 w-full bg-blue-300 flex justify-between items-center">
        <div>
            Logo
        </div>
        <div>
            <ul class="flex space-x-3 text-white items-center">
                <a href="/"><li class="hover:bg-white hover:text-black border-b-4 border-blue-300 hover:border-gray-500 h-full py-5 px-3">Home</li></a>
                <a href="/learn"><li class="hover:bg-white hover:text-black border-b-4 border-blue-300 hover:border-gray-500 h-full py-5 px-3">Learn</li></a>
                <a href="/fingerspelling"><li class="hover:bg-white hover:text-black border-b-4 border-blue-300 hover:border-gray-500 h-full py-5 px-3">Fingerspelling</li></a>
                <a href="/contact"><li class="hover:bg-white hover:text-black border-b-4 border-blue-300 hover:border-gray-500 h-full py-5 px-3">Contact</li></a>
                <a href="/forum"><li class="hover:bg-white hover:text-black border-b-4 border-blue-300 hover:border-gray-500 h-full py-5 px-3">Forum</li></a>
            </ul>
        </div>
    </nav>

    <div class="w-3/4 mx-auto">{{ $slot }}</div>

    <footer class="py-3 px-6 text-center bg-blue-300">
        <p>&copy; <?= date('Y') ?> BSL</p>
    </footer>
</body>
</html>