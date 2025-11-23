@extends('dashboard.layouts.main')
@section('content')

    <!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="card">
            <h2 class="card-title">Table Component</h2>
        </div>
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE ONE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Information Table One</h3>
                        <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                            <div class="flex items-center gap-5">
                                <form class="max-w-80 relative">
                                    <span class="absolute top-1/2 -translate-y-[40%] left-2.5">
                                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                                    </span>
                                    <input type="text" placeholder="Search for..." class="form-input pl-[30px]">
                                </form>
                                <button type="button" class="font-spline_sans text-sm px-1 text-gray-900 dark:text-dark-text flex-center gap-1.5" onclick="window.location.href=window.location.href">
                                    <i class="ri-loop-right-line text-inherit text-sm"></i>
                                    <span>Refresh</span>
                                </button>
                            </div>
                            <button class="btn b-light btn-primary-light">
                                <i class="ri-add-fill text-inherit"></i>
                                <span>Add Data</span>
                            </button>
                        </div>
                        <!-- START INFORMATION TABLE -->
                        <div class="overflow-x-auto mt-5">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Instructor Name</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Category</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Classes</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Last Update</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Total Student</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">Darrell Steward</td>
                                        <td class="p-6 py-4 dk-border-one">Development</td>
                                        <td class="p-6 py-4 dk-border-one">Introduction CSS</td>
                                        <td class="p-6 py-4 dk-border-one">1/31/14</td>
                                        <td class="p-6 py-4 dk-border-one">8,013</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <!-- Dirrect Message -->
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <!-- Delete From List -->
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-0" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-0" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">Brooklyn Simmons</td>
                                        <td class="p-6 py-4 dk-border-one">Web Design</td>
                                        <td class="p-6 py-4 dk-border-one">Design layout</td>
                                        <td class="p-6 py-4 dk-border-one">5/19/12</td>
                                        <td class="p-6 py-4 dk-border-one">5,560</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <!-- Dirrect Message -->
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <!-- Delete From List -->
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-1" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-1" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">Annette Black</td>
                                        <td class="p-6 py-4 dk-border-one">UX/UI Design</td>
                                        <td class="p-6 py-4 dk-border-one">User Research</td>
                                        <td class="p-6 py-4 dk-border-one">1/28/17</td>
                                        <td class="p-6 py-4 dk-border-one">1,148</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <!-- Dirrect Message -->
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <!-- Delete From List -->
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">Darrell Steward</td>
                                        <td class="p-6 py-4 dk-border-one">Development</td>
                                        <td class="p-6 py-4 dk-border-one">Introduction CSS</td>
                                        <td class="p-6 py-4 dk-border-one">1/31/14</td>
                                        <td class="p-6 py-4 dk-border-one">8,013</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <!-- Dirrect Message -->
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <!-- Delete From List -->
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">Marvin McKinney</td>
                                        <td class="p-6 py-4 dk-border-one">Marketing</td>
                                        <td class="p-6 py-4 dk-border-one">Introduction CSS</td>
                                        <td class="p-6 py-4 dk-border-one">1/31/14</td>
                                        <td class="p-6 py-4 dk-border-one">3,933</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <!-- Dirrect Message -->
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <!-- Delete From List -->
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-4" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-4" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of 20 entries</div>
                            <nav class="dk-border-one rounded-[4px] overflow-hidden">
                                <ul class="divide-x divide-gray-200 dark:divide-dark-border-three flex items-center">
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 -rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500 active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">
                                            <i class="ri-more-fill text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;div class="flex-center-between">
                                    &lt;div class="flex items-center gap-5">
                                        &lt;form class="max-w-80 relative">
                                            &lt;span class="absolute top-1/2 -translate-y-[40%] left-2.5">
                                                &lt;i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]">&lt;/i>
                                            &lt;/span>
                                            &lt;input type="text" placeholder="Search for..." class="form-input pl-[30px]">
                                        &lt;/form>
                                        &lt;button type="button" class="font-spline_sans text-sm px-1 text-gray-900 dark:text-dark-text flex-center gap-1.5">
                                            &lt;i class="ri-loop-right-line text-gray-900 dark:text-dark-text text-sm">&lt;/i>
                                            &lt;span>Refresh&lt;/span>
                                        &lt;/button>
                                    &lt;/div>
                                    &lt;button class="btn b-light btn-primary-light">
                                        &lt;i class="ri-add-fill text-inherit">&lt;/i>
                                        &lt;span>Add Data&lt;/span>
                                    &lt;/button>
                                &lt;/div>
                                &lt;div class="overflow-x-auto">
                                    &lt;table class="table-auto border-collapse dk-border-one w-full whitespace-nowrap text-left text-gray-900 dark:text-dark-text font-medium leading-none">
                                        &lt;thead class="border-b-[0.5px] border-gray-200 dark:border-dark-border text-gray-500 dark:text-dark-text font-medium">
                                            &lt;tr>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Instructor Name&lt;/th>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Category&lt;/th>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Classes&lt;/th>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Last Update&lt;/th>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one w-10">Total Student&lt;/th>
                                                &lt;th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one w-10">Action&lt;/th>
                                            &lt;/tr>
                                        &lt;/thead>
                                        &lt;tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                            &lt;tr>
                                                &lt;td class="p-6 py-4 dk-border-one">Darrell Steward&lt;/td>
                                                &lt;td class="p-6 py-4 dk-border-one">Development&lt;/td>
                                                &lt;td class="p-6 py-4 dk-border-one">Introduction CSS&lt;/td>
                                                &lt;td class="p-6 py-4 dk-border-one">1/31/14&lt;/td>
                                                &lt;td class="p-6 py-4 dk-border-one">8,013&lt;/td>
                                                &lt;td class="p-6 py-4 dk-border-one">
                                                    &lt;div class="flex items-center gap-2">
                                                        &lt;a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                            &lt;i class="ri-message-2-line text-inherit text-[13px]">&lt;/i>
                                                        &lt;/a>
                                                        &lt;a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                            &lt;i class="ri-delete-bin-line text-inherit text-[13px]">&lt;/i>
                                                        &lt;/a>
                                                        &lt;div class="relative ml-5">
                                                            &lt;button data-popover-target="td-0" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                                &lt;i class="ri-more-2-fill text-inherit">&lt;/i>
                                                            &lt;/button>
                                                            &lt;ul id="td-0" class="popover-target invisible" data-popover>
                                                                &lt;li>
                                                                    &lt;a class="popover-item" href="#">More&lt;/a>
                                                                &lt;/li>
                                                            &lt;/ul>
                                                        &lt;/div>
                                                    &lt;/div>
                                                &lt;/td>
                                            &lt;/tr>
                                        &lt;/tbody>
                                    &lt;/table>
                                &lt;/div>
                                &lt;div class="flex-center-between">
                                    &lt;div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of 20 entries&lt;/div>
                                    &lt;nav class="dk-border-one rounded-[4px] overflow-hidden">
                                        &lt;ul class="divide-x divide-gray-200 dark:divide-dark-border-three flex items-center">
                                            &lt;li>
                                                &lt;a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">
                                                    &lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 -rotate-45">
                                                        &lt;path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                                    &lt;/svg>
                                                &lt;/a>
                                            &lt;/li>
                                            &lt;li>
                                                &lt;a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500 active">1&lt;/a>
                                            &lt;/li>
                                            &lt;li>
                                                &lt;a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">
                                                    &lt;i class="ri-more-fill text-inherit">&lt;/i>
                                                &lt;/a>
                                            &lt;/li>
                                            &lt;li>
                                                &lt;a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">10&lt;/a>
                                            &lt;/li>
                                            &lt;li>
                                                &lt;a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">
                                                    &lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 rotate-45">
                                                        &lt;path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                                    &lt;/svg>
                                                &lt;/a>
                                            &lt;/li>
                                        &lt;/ul>
                                    &lt;/nav>
                                &lt;/div>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- INFORMATION TABLE TWO -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Information Table Two</h3>
                        <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                            <div class="flex items-center gap-5">
                                <form class="max-w-80 relative">
                                    <span class="absolute top-1/2 -translate-y-[40%] left-2.5">
                                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                                    </span>
                                    <input type="text" placeholder="Search for..." class="form-input pl-[30px]">
                                </form>
                                <button type="button" class="font-spline_sans text-sm px-1 text-gray-900 dark:text-dark-text flex-center gap-1.5">
                                    <i class="ri-loop-right-line text-inherit text-sm"></i>
                                    <span>Refresh</span>
                                </button>
                            </div>
                            <button class="btn b-light btn-primary-light">
                                <i class="ri-add-fill text-inherit"></i>
                                <span>Add Data</span>
                            </button>
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium leading-none">
                                <thead>
                                    <tr>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one">Instructor Name</th>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one">Category</th>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one">Classes</th>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one">Last Update</th>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one">Total Student</th>
                                        <th class="p-6 py-4 bg-[#E6F6FD] dark:bg-dark-card-shade dk-border-one w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <tr class="has-[:checked]:bg-[#F2F4F9] dark:has-[:checked]:bg-dark-icon/50">
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="inline-flex items-center gap-4 w-full">
                                                <input type="checkbox" class="size-4 cursor-pointer bg-transparent border-2 border-gray-200 rounded-sm appearance-none relative after:position-center after:size-4 checked:border-none checked:after:bg-checked">
                                                Darrell Steward
                                            </div>
                                        </td>
                                        <td class="p-6 py-4 dk-border-one">Business Growths</td>
                                        <td class="p-6 py-4 dk-border-one">Learn Thinking</td>
                                        <td class="p-6 py-4 dk-border-one">5/7/16</td>
                                        <td class="p-6 py-4 dk-border-one">8,829</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2-0" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2-0" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="has-[:checked]:bg-[#F2F4F9] dark:has-[:checked]:bg-dark-icon/50">
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="inline-flex items-center gap-4 w-full">
                                                <input type="checkbox" class="size-4 cursor-pointer bg-transparent border-2 border-gray-200 rounded-sm appearance-none relative after:position-center after:size-4 checked:border-none checked:after:bg-checked">
                                                Brooklyn Simmons
                                            </div>
                                        </td>
                                        <td class="p-6 py-4 dk-border-one">Meditations</td>
                                        <td class="p-6 py-4 dk-border-one">Mind Balance</td>
                                        <td class="p-6 py-4 dk-border-one">9/4/12</td>
                                        <td class="p-6 py-4 dk-border-one">1,374</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2-1" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2-1" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="has-[:checked]:bg-[#F2F4F9] dark:has-[:checked]:bg-dark-icon/50">
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="inline-flex items-center gap-4 w-full">
                                                <input type="checkbox" class="size-4 cursor-pointer bg-transparent border-2 border-gray-200 rounded-sm appearance-none relative after:position-center after:size-4 checked:border-none checked:after:bg-checked">
                                                Annette Black
                                            </div>
                                        </td>
                                        <td class="p-6 py-4 dk-border-one">App Development</td>
                                        <td class="p-6 py-4 dk-border-one">Function Understand</td>
                                        <td class="p-6 py-4 dk-border-one">12/10/13</td>
                                        <td class="p-6 py-4 dk-border-one">3,933</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2-2" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2-2" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="has-[:checked]:bg-[#F2F4F9] dark:has-[:checked]:bg-dark-icon/50">
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="inline-flex items-center gap-4 w-full">
                                                <input type="checkbox" class="size-4 cursor-pointer bg-transparent border-2 border-gray-200 rounded-sm appearance-none relative after:position-center after:size-4 checked:border-none checked:after:bg-checked">
                                                Eleanor Pena
                                            </div>
                                        </td>
                                        <td class="p-6 py-4 dk-border-one">Graphic Design</td>
                                        <td class="p-6 py-4 dk-border-one">Branding Idea</td>
                                        <td class="p-6 py-4 dk-border-one">8/30/14</td>
                                        <td class="p-6 py-4 dk-border-one">1,013</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2-3" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2-3" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="has-[:checked]:bg-[#F2F4F9] dark:has-[:checked]:bg-dark-icon/50">
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="inline-flex items-center gap-4 w-full">
                                                <input type="checkbox" class="size-4 cursor-pointer bg-transparent border-2 border-gray-200 rounded-sm appearance-none relative after:position-center after:size-4 checked:border-none checked:after:bg-checked">
                                                Cameron Williamson
                                            </div>
                                        </td>
                                        <td class="p-6 py-4 dk-border-one">Marketing</td>
                                        <td class="p-6 py-4 dk-border-one">Introduction</td>
                                        <td class="p-6 py-4 dk-border-one">10/21/19</td>
                                        <td class="p-6 py-4 dk-border-one">2,013</td>
                                        <td class="p-6 py-4 dk-border-one">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-2-4" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-2-4" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of 20 entries</div>
                            <nav class="dk-border-one rounded-[4px] overflow-hidden">
                                <ul class="divide-x divide-gray-200 dark:divide-dark-border-three flex items-center">
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 -rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500 active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">
                                            <i class="ri-more-fill text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- INFORMATION TABLE THREE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Student Information Table</h3>
                        <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                            <div class="flex items-center gap-5">
                                <form class="max-w-80 relative">
                                    <span class="absolute top-1/2 -translate-y-[40%] left-2.5">
                                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                                    </span>
                                    <input type="text" placeholder="Search for..." class="form-input pl-[30px]">
                                </form>
                                <button type="button" class="font-spline_sans text-sm px-1 text-gray-900 dark:text-dark-text flex-center gap-1.5">
                                    <i class="ri-loop-right-line text-inherit text-sm"></i>
                                    <span>Refresh</span>
                                </button>
                            </div>
                            <button class="btn b-light btn-primary-light">
                                <i class="ri-add-fill text-inherit"></i>
                                <span>Add Data</span>
                            </button>
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr class="text-primary-500">
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Name</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Status</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Last Activities</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Course Name</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Purchase</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg">Progress</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <tr>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-3.5">
                                                <a href="#" class="size-12 rounded-50 overflow-hidden dk-theme-card-square">
                                                    <img src="assets/images/student/student-1.png" alt="student">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold">
                                                        <a href="#">Eleanor Pena</a>
                                                    </h6>
                                                    <p class="font-spline_sans text-sm font-light mt-1">UX/UI Design</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <span class="badge badge-success-light rounded-full">Success</span>
                                        </td>
                                        <td class="p-6 py-4">2023-10-22</td>
                                        <td class="p-6 py-4">Web Design</td>
                                        <td class="p-6 py-4">5 - Course</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-progress-bar-bg dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-progress-bar rounded-full w-[55%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">55% Growing</div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3-0" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3-0" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-3.5">
                                                <a href="#" class="size-12 rounded-50 overflow-hidden dk-theme-card-square">
                                                    <img src="assets/images/student/student-2.png" alt="student">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold">
                                                        <a href="#">Esther Howard</a>
                                                    </h6>
                                                    <p class="font-spline_sans text-sm font-light mt-1">Web & Mobile Application</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <span class="badge badge-warning-light rounded-full">Warning</span>
                                        </td>
                                        <td class="p-6 py-4">2024-10-22</td>
                                        <td class="p-6 py-4">Management</td>
                                        <td class="p-6 py-4">4 - Course</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-progress-bar-bg dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-progress-bar rounded-full w-[20%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">20% Growing</div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3-1" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3-1" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-3.5">
                                                <a href="#" class="size-12 rounded-50 overflow-hidden dk-theme-card-square">
                                                    <img src="assets/images/student/student-3.png" alt="student">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold">
                                                        <a href="#">Albert Flores</a>
                                                    </h6>
                                                    <p class="font-spline_sans text-sm font-light mt-1">Business Strategy</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <span class="badge badge-info-light rounded-full">Info</span>
                                        </td>
                                        <td class="p-6 py-4">2024-10-22</td>
                                        <td class="p-6 py-4">Developmnet</td>
                                        <td class="p-6 py-4">1 - Course</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-progress-bar-bg dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-progress-bar rounded-full w-[30%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">30% Growing</div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3-2" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3-2" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-3.5">
                                                <a href="#" class="size-12 rounded-50 overflow-hidden dk-theme-card-square">
                                                    <img src="assets/images/student/student-4.png" alt="student">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold">
                                                        <a href="#">Darlene Robertson</a>
                                                    </h6>
                                                    <p class="font-spline_sans text-sm font-light mt-1">Frontend Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <span class="badge badge-danger-light rounded-full">Danger</span>
                                        </td>
                                        <td class="p-6 py-4">2021-11-02</td>
                                        <td class="p-6 py-4">Marketing</td>
                                        <td class="p-6 py-4">1 - Course</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-progress-bar-bg dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-progress-bar rounded-full w-[70%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">70% Growing</div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3-3" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3-3" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-3.5">
                                                <a href="#" class="size-12 rounded-50 overflow-hidden dk-theme-card-square">
                                                    <img src="assets/images/student/student-5.png" alt="student">
                                                </a>
                                                <div>
                                                    <h6 class="leading-none text-heading font-semibold">
                                                        <a href="#">Devon Lane</a>
                                                    </h6>
                                                    <p class="font-spline_sans text-sm font-light mt-1">Visual Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <span class="badge badge-success-light rounded-full">Success</span>
                                        </td>
                                        <td class="p-6 py-4">2021-11-02</td>
                                        <td class="p-6 py-4">Business Strategy</td>
                                        <td class="p-6 py-4">10 - Course</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-progress-bar-bg dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-progress-bar rounded-full w-[15%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">15% Growing</div>
                                            </div>
                                        </td>
                                        <td class="p-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="chatbox.html" class="btn-icon btn-primary-icon-light size-7">
                                                    <i class="ri-message-2-line text-inherit text-[13px]"></i>
                                                </a>
                                                <a href="#" class="btn-icon btn-danger-icon-light size-7">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </a>
                                                <div class="relative ml-5">
                                                    <button data-popover-target="td-3-4" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon">
                                                        <i class="ri-more-2-fill text-inherit"></i>
                                                    </button>
                                                    <ul id="td-3-4" class="popover-target invisible" data-popover>
                                                        <li>
                                                            <a class="popover-item" href="#">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of 20 entries</div>
                            <nav>
                                <ul class="flex items-center gap-1">
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text hover:bg-primary-500 hover:text-white dark:bg-dark-card-two">
                                            <i class="ri-arrow-left-s-line text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white">
                                            <i class="ri-more-fill text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text [&.active]:bg-primary-500 [&.active]:text-white">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-spline_sans font-medium flex-center size-8 rounded-50 text-gray-900 dark:text-dark-text hover:bg-primary-500 hover:text-white dark:bg-dark-card-two">
                                            <i class="ri-arrow-right-s-line text-inherit"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- INFORMATION TABLE FOUR -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Student Information Table</h3>
                        <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                            <div class="flex items-center gap-5">
                                <form class="max-w-80 relative">
                                    <span class="absolute top-1/2 -translate-y-[40%] left-2.5">
                                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                                    </span>
                                    <input type="text" placeholder="Search for..." class="form-input pl-[30px]">
                                </form>
                                <button type="button" class="font-spline_sans text-sm px-1 text-gray-900 dark:text-dark-text flex-center gap-1.5">
                                    <i class="ri-loop-right-line text-inherit text-sm"></i>
                                    <span>Refresh</span>
                                </button>
                            </div>
                            <button class="btn b-light btn-primary-light">
                                <i class="ri-add-fill text-inherit"></i>
                                <span>Add Data</span>
                            </button>
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr>
                                        <th class="p-6 py-4 bg-[#FFEEEE] dark:bg-dark-card-shade first:rounded-l-lg last:rounded-r-lg">Instructor Name</th>
                                        <th class="p-6 py-4 bg-[#FFEEEE] dark:bg-dark-card-shade first:rounded-l-lg last:rounded-r-lg">Category</th>
                                        <th class="p-6 py-4 bg-[#FFEEEE] dark:bg-dark-card-shade first:rounded-l-lg last:rounded-r-lg">Student</th>
                                        <th class="p-6 py-4 bg-[#FFEEEE] dark:bg-dark-card-shade first:rounded-l-lg last:rounded-r-lg">Date</th>
                                        <th class="p-6 py-4 bg-[#FFEEEE] dark:bg-dark-card-shade first:rounded-l-lg last:rounded-r-lg">Progress</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <tr>
                                        <td class="p-6 py-4">Cameron Williamson</td>
                                        <td class="p-6 py-4">Development</td>
                                        <td class="p-6 py-4">
                                            <ul class="flex items-center *:-ms-1">
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-1.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-2.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-3.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-4.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <a href="#" class="text-xs flex-center size-7 rounded-50 bg-primary-500 text-white">+5</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="p-6 py-4">2018-08-26</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-primary-200 dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[55%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">55% Growing</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">Annette Black</td>
                                        <td class="p-6 py-4">Advanced CSS</td>
                                        <td class="p-6 py-4">
                                            <ul class="flex items-center *:-ms-1">
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-1.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-2.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-3.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-4.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <a href="#" class="text-xs flex-center size-7 rounded-50 bg-primary-500 text-white">+5</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="p-6 py-4">2019-08-26</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-primary-200 dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[45%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">45% Growing</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">Ronald Richards</td>
                                        <td class="p-6 py-4">Web Design</td>
                                        <td class="p-6 py-4">
                                            <ul class="flex items-center *:-ms-1">
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-1.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-2.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-3.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-4.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <a href="#" class="text-xs flex-center size-7 rounded-50 bg-primary-500 text-white">+5</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="p-6 py-4">2021-01-01</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-primary-200 dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[10%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">10% Growing</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">Cody Fisher</td>
                                        <td class="p-6 py-4">Marketing</td>
                                        <td class="p-6 py-4">
                                            <ul class="flex items-center *:-ms-1">
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-1.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-2.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-3.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-4.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <a href="#" class="text-xs flex-center size-7 rounded-50 bg-primary-500 text-white">+5</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="p-6 py-4">2012-02-06</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-primary-200 dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[91%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">91% Growing</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-6 py-4">Leslie Alexander</td>
                                        <td class="p-6 py-4">Development</td>
                                        <td class="p-6 py-4">
                                            <ul class="flex items-center *:-ms-1">
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-1.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-2.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-3.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <img src="assets/images/student/student-4.png" alt="student" class="size-7 rounded-50">
                                                </li>
                                                <li class="relative hover:scale-110 hover:z-10">
                                                    <a href="#" class="text-xs flex-center size-7 rounded-50 bg-primary-500 text-white">+5</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="p-6 py-4">2018-08-26</td>
                                        <td class="p-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="relative max-w-[106px] h-2 rounded-full bg-primary-200 dark:bg-progress-bar-bg-dark overflow-hidden">
                                                    <div class="absolute top-0 left-0 bottom-0 bg-primary-500 rounded-full w-[20%]"></div>
                                                </div>
                                                <div class="text-xs leading-none text-gray-500 dark:text-dark-text">20% Growing</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of 20 entries</div>
                            <ul class="flex items-center gap-1 5 text-gray-500 dark:text-dark-text text-sm font-medium">
                                <li>
                                    <a href="#" class="size-8 dk-border-one rounded-[5px] flex-center bg-primary-500 dark:hover:bg-dark-card-shade hover:bg-transparent text-white hover:text-gray-900 dark:text-dark-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 -rotate-45">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="size-8 dk-border-one rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">01</a>
                                </li>
                                <li>
                                    <a href="#" class="size-8 dk-border-one rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">02</a>
                                </li>
                                <li>
                                    <a href="#" class="size-8 dk-border-one rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">03</a>
                                </li>
                                <li>
                                    <a href="#" class="size-8 dk-border-one rounded-[5px] flex-center bg-primary-500 dark:hover:bg-dark-card-shade hover:bg-transparent text-white hover:text-gray-900 dark:text-dark-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 rotate-45">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
        </div>
    </div>
@endsection