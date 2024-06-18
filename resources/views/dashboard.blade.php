<link rel="stylesheet" href="asset/css/dashboard.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="display: flex">
            {{ __('Doctors') }}
            <a href="#" onclick="open_form()">
                <img src="https://cdn2.iconfinder.com/data/icons/social-productivity-line-art-2/128/add-64.png" id="add">
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th><img src="https://cdn3.iconfinder.com/data/icons/basic-actions-set/24/39_-_Action_parameters_params_preferences_setting_settings_filter_icon-256.png" alt=""></th>
                        </tr>


                        @foreach($doctor as $doctor)
                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->Name}}</td>
                            <td>{{$doctor->Email}}</td>
                            <td>{{$doctor->Phone}}</td>
                            <td><a href="booking">Book</a></td>
                        </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="myForm">
        <form method="post" action="storeData">
            @csrf
            <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/cross-256.png" id="close_btn" onclick="close_form()">
            <h1>Add Doctors</h1>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name ..." autocomplete="off">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email ..." autocomplete="off">
            </div>

            <div>
                <label for="phone">Contact</label>
                <input type="text" name="phone" id="phone" placeholder="Contact ..." autocomplete="off">
            </div>

            <button type="submit" id="add_btn" disabled>Add</button>

        </form>
    </div>

    <script src="asset/script/dashboard.js"></script>
</x-app-layout>