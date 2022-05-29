<nav class="z-40 fixed w-full bg-[#3c8dbc]">
    <div class="container items-center ">
        <div class="items-center">
            <div class="inline-flex float-right py-3 px-6 hover:bg-[#347194]">
                <button type="button" class="flex text-sm"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('image/user.png') }}" alt="user photo">
                    <span class="font-normal text-white px-2 pt-1">{{auth()->user()->username}}</span>
                </button>
            </div>
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded-md divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->username}}</span>
                    <span class="block text-sm font-medium text-gray-900 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="/logout"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class='font-semibold text-red-600 bx bx-power-off'></i> Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
