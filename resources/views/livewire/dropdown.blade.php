<div class="w-fit mx-auto z-50 relative">
    <button id="{{"dropdownbtn".$title}}" onclick="dropdownToggle('dropdown{{$title}}')"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        {{$title}}
        <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div id="{{"dropdown".$title}}"  class="hidden w-44 bg-white rounded divide-gray-100 dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
            @foreach ($options as $option)
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$option}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
