<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-rose-400">
    <div class="flex flex-col justify-between relative">
        <div class="max-w-2xl mx-auto mt-10 p-6 bg-white/10 rounded-lg shadow-md">
            <div class="md:flex justify-center space-x-3 mt-5 px-4 lg:px-8">
                <div class="flex justify-center">
                    <img class="h-[583px] w-[584px]" src="https://png.pngtree.com/png-vector/20240807/ourmid/pngtree-podcaster-on-live-streaming-flat-png-image_13102019.png" alt=" image">
                </div>

                <div class="space-y-5">
                    <div class="mt-8 max-w-xl mx-auto">
                        <div class="px-8 pt-8">

                            <div class="mt-4">
                                <a href="/contact">
                                <button class="w-full bg-amber-400 text-white font-semibold py-2 px-4 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-opacity-50">
                                    Add New Contact
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>