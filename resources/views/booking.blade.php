<link rel="stylesheet" href="asset/css/booking.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Time') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="content">

                    <a href="#" onclick="open_token(event)">9:00 - 10:00</a>
                    <a href="#" onclick="open_token(event)">11:00 - 12:00</a>
                    <a href="#" onclick="open_token(event)">13:00 - 14:00</a>
                    <a href="#" onclick="open_token(event)">15:00 - 16:00</a>


                </div>
            </div>
        </div>
    </div>


    <div class="booked">
        <div>
            <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/cross-256.png" id="close_btn" onclick="close_token()">
            <h1>Token ID</h1>
            <h2>#08CE12</h2>
            <h3>Time:</h3>
            <p>Please present this token to our receptionist or staff member upon arrival.</p>
        </div>

    </div>

    <script src="asset/script/booked.js"></script>
</x-app-layout>