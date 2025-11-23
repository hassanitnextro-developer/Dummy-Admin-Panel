
    <!-- Start App Menu -->
    <div id="app-drawer" class="app-menu flex flex-col bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max border-r-2 border-primary-400 xl:border-none xl:translate-x-0 rounded-r-15 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:group-data-[sidebar-size=lg]:bottom-4 xl:group-data-[theme-width=box]:left-auto dk-theme-card-square z-backdrop ac-transition" tabindex="-1" style="margin-top: 14px;">
        <div class="px-6 group-data-[sidebar-size=sm]:px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:justify-center">
            <a href="{{route('index')}}" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="{{asset('assets/images/logo/logo-text.svg')}}" alt="logo" class="group-[.dark]:hidden">
                <img src="{{asset('assets/images/logo/logo-text-dark.svg')}}" alt="logo" class="group-[.light]:hidden">
            </a>
            <a href="index-2.html" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="" alt="logo">
            </a>
        </div>
        <div id="app-menu-scrollbar" data-scrollbar class="px-2.5 group-data-[sidebar-size=sm]:px-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                <ul id="navbar-nav" class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">
                    <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#" class="dropdown-button top-layer relative leading-none px-3.5 py-3 h-[42px] flex items-center rounded-md group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full text-gray-500 dark:text-dark-text-two hover:text-primary-500 dark:hover:text-white [&.active]:text-primary-500 dark:[&.active]:text-white group-data-[sidebar-size=sm]:border group-data-[sidebar-size=sm]:border-gray-200 dark:group-data-[sidebar-size=sm]:border-dark-border-four hover:!bg-primary-200 dark:hover:!bg-primary-500 [&.active]:bg-primary-200 dark:[&.active]:bg-primary-500 group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-card group-data-[sidebar-size=sm]:hover:bg-primary-500 group-data-[sidebar-size=sm]:[&.active]:bg-primary-200 dark:group-data-[sidebar-size=sm]:[&.active]:bg-primary-500 group/menu-link peer/dp-btn dk-theme-card-square ac-transition">
                            <span class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 15 15">
                                    <path fill="currentColor" fill-rule="evenodd" d="M2.8 1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 1.04 2.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6A1.5 1.5 0 0 0 2.15 6.96c.174.04.37.04.6.04h2.5c.229 0 .426 0 .6-.041A1.5 1.5 0 0 0 6.96 5.85c.04-.174.04-.37.04-.6v-2.5c0-.229 0-.426-.041-.6A1.5 1.5 0 0 0 5.85 1.04C5.676 1 5.48 1 5.25 1H5.2zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.003.374-.014.417a.5.5 0 0 1-.37.37C5.575 5.996 5.509 6 5.2 6H2.8c-.308 0-.374-.003-.417-.014a.5.5 0 0 1-.37-.37C2.004 5.575 2 5.509 2 5.2V2.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37M9.8 1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 8.04 2.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6A1.5 1.5 0 0 0 9.15 6.96c.174.04.37.04.6.04h2.5c.229 0 .426 0 .6-.041a1.5 1.5 0 0 0 1.11-1.109c.04-.174.04-.37.04-.6v-2.5c0-.229 0-.426-.041-.6a1.5 1.5 0 0 0-1.109-1.11c-.174-.04-.37-.04-.6-.04h-.05zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.004.374-.014.417a.5.5 0 0 1-.37.37c-.042.01-.108.013-.416.013H9.8c-.308 0-.374-.003-.417-.014a.5.5 0 0 1-.37-.37C9.004 5.575 9 5.509 9 5.2V2.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37M2.75 8h2.5c.229 0 .426 0 .6.041A1.5 1.5 0 0 1 6.96 9.15c.04.174.04.37.04.6v2.5c0 .229 0 .426-.041.6a1.5 1.5 0 0 1-1.109 1.11c-.174.04-.37.04-.6.04h-2.5c-.229 0-.426 0-.6-.041a1.5 1.5 0 0 1-1.11-1.109c-.04-.174-.04-.37-.04-.6v-2.5c0-.229 0-.426.041-.6A1.5 1.5 0 0 1 2.15 8.04c.174-.04.37-.04.6-.04m.05 1c-.308 0-.374.003-.417.014a.5.5 0 0 0-.37.37C2.004 9.425 2 9.491 2 9.8v2.4c0 .308.003.374.014.417a.5.5 0 0 0 .37.37c.042.01.108.013.416.013h2.4c.308 0 .374-.004.417-.014a.5.5 0 0 0 .37-.37c.01-.042.013-.108.013-.416V9.8c0-.308-.003-.374-.014-.417a.5.5 0 0 0-.37-.37C5.575 9.004 5.509 9 5.2 9zm7-1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 8.04 9.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6a1.5 1.5 0 0 0 1.109 1.11c.174.041.371.041.6.041h2.5c.229 0 .426 0 .6-.041a1.5 1.5 0 0 0 1.109-1.109c.041-.174.041-.371.041-.6V9.75c0-.229 0-.426-.041-.6a1.5 1.5 0 0 0-1.109-1.11c-.174-.04-.37-.04-.6-.04h-.05zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.004.374-.014.417a.5.5 0 0 1-.37.37c-.042.01-.108.013-.416.013H9.8c-.308 0-.374-.004-.417-.014a.5.5 0 0 1-.37-.37C9.004 12.575 9 12.509 9 12.2V9.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Dashboard
                            </span>
                        </a>
                        <div class="dropdown-content max-h-0 group-data-[sidebar-size=sm]:!max-h-max overflow-hidden group-data-[sidebar-size=sm]:overflow-visible hidden group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:shadow-menu-dropdown transition-all duration-300">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="index-2.html" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Admin
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="dashboard-instructor.html" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Instructor
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="dashboard-student.html" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Student
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#" class="dropdown-button top-layer relative leading-none px-3.5 py-3 h-[42px] flex items-center rounded-md group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full text-gray-500 dark:text-dark-text-two hover:text-primary-500 dark:hover:text-white [&.active]:text-primary-500 dark:[&.active]:text-white group-data-[sidebar-size=sm]:border group-data-[sidebar-size=sm]:border-gray-200 dark:group-data-[sidebar-size=sm]:border-dark-border-four hover:!bg-primary-200 dark:hover:!bg-primary-500 [&.active]:bg-primary-200 dark:[&.active]:bg-primary-500 group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-card group-data-[sidebar-size=sm]:hover:bg-primary-500 group-data-[sidebar-size=sm]:[&.active]:bg-primary-200 dark:group-data-[sidebar-size=sm]:[&.active]:bg-primary-500 group/menu-link peer/dp-btn dk-theme-card-square ac-transition">
                            <span class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 15 15">
                                    <path fill="currentColor" fill-rule="evenodd" d="M4.671 3.146a.5.5 0 0 0 0 .707l2.475 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.707L7.853.671a.5.5 0 0 0-.707 0zM7.5 5.268L5.732 3.5L7.5 1.732L9.267 3.5zm1.17 1.878a.5.5 0 0 0 0 .707l2.475 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.707l-2.475-2.475a.5.5 0 0 0-.707 0zm2.83 2.122L9.732 7.5L11.5 5.732L13.268 7.5zm-6.83 2.585a.5.5 0 0 1 0-.707l2.475-2.475a.5.5 0 0 1 .707 0l2.475 2.475a.5.5 0 0 1 0 .707l-2.475 2.475a.5.5 0 0 1-.707 0zm1.061-.353L7.5 13.268L9.267 11.5L7.5 9.732zM.672 7.146a.5.5 0 0 0 0 .708l2.474 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.708L3.853 4.672a.5.5 0 0 0-.707 0zM3.5 9.268L1.732 7.5L3.5 5.732L5.267 7.5z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Table
                            </span>
                        </a>
                        <div class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{route('data-table')}}" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Data Table
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{route('default-table')}}" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Default Table
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#" class="dropdown-button top-layer relative leading-none px-3.5 py-3 h-[42px] flex items-center rounded-md group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full text-gray-500 dark:text-dark-text-two hover:text-primary-500 dark:hover:text-white [&.active]:text-primary-500 dark:[&.active]:text-white group-data-[sidebar-size=sm]:border group-data-[sidebar-size=sm]:border-gray-200 dark:group-data-[sidebar-size=sm]:border-dark-border-four hover:!bg-primary-200 dark:hover:!bg-primary-500 [&.active]:bg-primary-200 dark:[&.active]:bg-primary-500 group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-card group-data-[sidebar-size=sm]:hover:bg-primary-500 group-data-[sidebar-size=sm]:[&.active]:bg-primary-200 dark:group-data-[sidebar-size=sm]:[&.active]:bg-primary-500 group/menu-link peer/dp-btn dk-theme-card-square ac-transition">
                            <span class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 15 15">
                                    <path fill="currentColor" fill-rule="evenodd" d="M4.671 3.146a.5.5 0 0 0 0 .707l2.475 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.707L7.853.671a.5.5 0 0 0-.707 0zM7.5 5.268L5.732 3.5L7.5 1.732L9.267 3.5zm1.17 1.878a.5.5 0 0 0 0 .707l2.475 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.707l-2.475-2.475a.5.5 0 0 0-.707 0zm2.83 2.122L9.732 7.5L11.5 5.732L13.268 7.5zm-6.83 2.585a.5.5 0 0 1 0-.707l2.475-2.475a.5.5 0 0 1 .707 0l2.475 2.475a.5.5 0 0 1 0 .707l-2.475 2.475a.5.5 0 0 1-.707 0zm1.061-.353L7.5 13.268L9.267 11.5L7.5 9.732zM.672 7.146a.5.5 0 0 0 0 .708l2.474 2.475a.5.5 0 0 0 .707 0l2.475-2.475a.5.5 0 0 0 0-.708L3.853 4.672a.5.5 0 0 0-.707 0zM3.5 9.268L1.732 7.5L3.5 5.732L5.267 7.5z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Form
                            </span>
                        </a>
                        <div class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{route('default-form')}}" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Form Example 1
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{route('default-form2')}}" class="relative peer/link text-gray-500 dark:text-dark-text-two leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Form Example 2
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Logout Link -->
        <div class="mt-auto px-2.5 py-6 group-data-[sidebar-size=sm]:px-2">
            <a href="{{route('logout')}}" class="flex-center-between text-gray-500 font-semibold leading-none bg-gray-200 dark:bg-dark-icon dark:text-dark-text rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square">
                <span class="group-data-[sidebar-size=sm]:hidden block">Logout</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 5h7V3H3v18h9v-2H5z" />
                    <path fill="currentColor" d="m21 12l-4-4v3H9v2h8v3z" />
                </svg>
            </a>
        </div>
    </div>
    <!-- End App Menu -->

