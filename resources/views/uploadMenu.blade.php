<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <title>Uplaod File</title>
</head>
<body>

    <div class="mt-20 mb-4 flex flex-col justify-center items-center">
        <label class="text-4xl font-medium text-gray-900 block mb-10">
            Upload File
        </label>

        <form class="w-full justify-center items-center flex flex-col" action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="h-12 block w-1/2 cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 pt-2 pl-3 focus:outline-none focus:border-transparent text-sm rounded-lg" id="file" type="file" name="chooseFile">
            @if (session()->has('success'))
                <div class="mt-2 text-sm text-gray-500" id="user_avatar_help">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="mt-10 flex items-center justify-center ">
                <button type="submit" class="bg-black rounded px-3 py-2 text-white">
                    Upload
                </button>
            </div>
        </form>
    </div>
</body>
</html>