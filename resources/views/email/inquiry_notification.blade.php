<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-rose-400">
    <div class="flex flex-col justify-between relative">
        <div class="max-w-2xl mx-auto mt-10 p-6 bg-white/10 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-6 text-center text-white">
                Contact Notification
            </h1>
            <div class="space-y-4">
                <div class="flex flex-col">
                    <label class="text-white font-medium mb-1" for="name">Name: <strong>{{$inquiry->name}}</strong></label>
                </div>
                <div class="flex flex-col">
                    <label class="text-white font-medium mb-1" for="email">Email: <strong>{{$inquiry->email}}</strong></label>
                </div>
                <div class="flex flex-col">
                    <label class="text-white font-medium mb-1" for="phone">Phone: <strong>{{$inquiry->phone}}</strong></label>
                </div>
                <div class="flex flex-col">
                    <label class="text-white font-medium mb-1" for="message">Message: <strong>{{$inquiry->message}}</strong></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>