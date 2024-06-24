{{-- <div class="flex flex-col w-96 p-5">
    <x-header-sidebar logo-header-sidebar="" description-header-sidebar="Dashboard"/>
    <div class="flex pt-10">
        <ul class="flex flex-col py-1 w-full gap-3">
            <li class="flex w-full items-start justify-start">
                <a href="#" class="flex flex-row w-full justify-start p-4 gap-3 hover:rounded-lg hover:bg-blue-200">
                    <box-icon  name="rocket"></box-icon>
                    <span class="text-base">Dashboard</span>
                </a>
            </li>
            <li class="flex flex-col w-full items-start justify-start">
                <a href="#" class="flex flex-row w-full justify-start p-4 gap-3 hover:rounded-lg hover:bg-blue-200">
                    <box-icon  name="rocket"></box-icon>
                    <span class="text-base">System</span>
                </a>
                <ul class="flex flex-col ps-10 py-1 w-full gap-3">
                    <li class="flex w-full items-start justify-start">
                        <a href="#" class="flex flex-row w-full justify-start p-4 gap-3 hover:rounded-lg hover:bg-blue-200">
                            <span class="text-base">System</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div> --}}
<aside id="sidebar" class="fixed top-0 left-0 z-40 w-80 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white drop-shadow-xl">
        <x-sidebars.header-sidebar logo-header-sidebar="" description-header-sidebar="Dashboard"/>
        <ul class="space-y-2 font-medium pt-14">
            <li>
                <a href="#" class="flex items-center px-2 py-4 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <box-icon name="rocket"></box-icon>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full px-2 py-4 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                    <box-icon name="rocket"></box-icon>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example1" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="flex items-center w-full px-2 text-gray-900 transition duration-75 rounded-lg pl-11 py-4 group hover:bg-gray-100">Products</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full px-2 text-gray-900 transition duration-75 rounded-lg pl-11 py-4 group hover:bg-gray-100">Billing</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full px-2 text-gray-900 transition duration-75 rounded-lg pl-11 py-4 group hover:bg-gray-100">Invoice</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
