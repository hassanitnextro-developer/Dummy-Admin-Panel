@extends('dashboard.layouts.main')
@section('content')
<!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="card">
            <h2 class="card-title">Form Layout</h2>
        </div>
        <div class="grid grid-cols-12 gap-x-4">
            <!-- FORM -->
            <div class="col-span-full lg:col-span-6">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">From</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="mb-4">
                            <label for="email"
                                class="form-label">Email</label>
                            <input type="email" id="email" class="form-input" placeholder="martinahernandezc@gmail.com"
                                autocomplete="off" required >
                        </div>
                        <div class="mb-4">
                            <label for="password"
                                class="form-label">Password</label>
                            <input type="password" id="password" class="form-input" placeholder="**********"
                                autocomplete="off" required >
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="mb-4">
                                        &lt;label for="email"
                                            class="form-label">Email&lt;/label>
                                        &lt;input type="email" id="email" class="form-input" placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35585447415c5b545d50475b545b51504f56755258545c591b565a58">[email&#160;protected]</a>"
                                            autocomplete="off" required >
                                    &lt;/div>
                                    &lt;div class="mb-4">
                                        &lt;label for="password"
                                            class="form-label">Password&lt;/label>
                                        &lt;input type="password" id="password" class="form-input" placeholder="**********"
                                            autocomplete="off" required >
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- FORM WITH LIGHT COLOR -->
            <div class="col-span-full lg:col-span-6">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Form with light color</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="mb-4">
                            <label for="email-2"
                                class="form-label">Email</label>
                            <input type="email" id="email-2" class="form-input bg-[#F8F8FC] dark:bg-dark-card-two"
                                placeholder="martinahernandezc@gmail.com" autocomplete="off" required >
                        </div>
                        <div class="mb-4">
                            <label for="password-2"
                                class="form-label">Password</label>
                            <input type="password" id="password-2" class="form-input bg-[#F8F8FC] dark:bg-dark-card-two"
                                placeholder="**********" autocomplete="off" required >
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="mb-4">
                                        &lt;label for="email-2"
                                            class="form-label">Email&lt;/label>
                                        &lt;input type="email" id="email-2" class="form-input bg-[#F8F8FC] dark:bg-dark-card-two"
                                            placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64090516100d0a050c01160a050a00011e07240309050d084a070b09">[email&#160;protected]</a>" autocomplete="off" required >
                                    &lt;/div>
                                    &lt;div class="mb-4">
                                        &lt;label for="password-2"
                                            class="form-label">Password&lt;/label>
                                        &lt;input type="password" id="password-2" class="form-input bg-[#F8F8FC] dark:bg-dark-card-two"
                                            placeholder="**********" autocomplete="off" required >
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- FORM WITH ICON -->
            <div class="col-span-full lg:col-span-6">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Form with icon</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="mb-4">
                            <label for="email-3" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Email</label>
                            <div class="flex">
                                <span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                    <i class="ri-mail-line text-inherit"></i>
                                </span>
                                <input type="email" id="email-3" class="form-input rounded-l-none"
                                    placeholder="martinahernandezc@gmail.com" required >
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password-3" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Password</label>
                            <div class="flex">
                                <span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                    <i class="ri-lock-unlock-line"></i>
                                </span>
                                <input type="password" id="password-3" class="form-input rounded-l-none"
                                    placeholder="**********" required >
                            </div>
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="mb-4">
                                        &lt;label for="email-3" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Email&lt;/label>
                                        &lt;div class="flex">
                                            &lt;span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                                &lt;i class="ri-mail-line text-inherit">&lt;/i>
                                            &lt;/span>
                                            &lt;input type="email" id="email-3" class="form-input rounded-l-none"
                                                placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec818d9e9885828d84899e828d828889968fac8b818d8580c28f8381">[email&#160;protected]</a>" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="mb-4">
                                        &lt;label for="password-3" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Password&lt;/label>
                                        &lt;div class="flex">
                                            &lt;span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                                &lt;i class="ri-lock-unlock-line">&lt;/i>
                                            &lt;/span>
                                            &lt;input type="password" id="password-3" class="form-input rounded-l-none"
                                                placeholder="**********" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- FORM WITH ICON LIGHT COLOR -->
            <div class="col-span-full lg:col-span-6">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Form with icon light color</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="mb-4">
                            <label for="email-4" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Email</label>
                            <div class="flex">
                                <span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                    <i class="ri-mail-line text-inherit"></i>
                                </span>
                                <input type="email" id="email-4" class="form-input rounded-l-none bg-[#F8F8FC] dark:bg-dark-card-two"
                                    placeholder="martinahernandezc@gmail.com" required >
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password-4" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Password</label>
                            <div class="flex">
                                <span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                    <i class="ri-lock-unlock-line"></i>
                                </span>
                                <input type="password" id="password-4" class="form-input rounded-l-none bg-[#F8F8FC] dark:bg-dark-card-two"
                                    placeholder="**********" required >
                            </div>
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="mb-4">
                                        &lt;label for="email-4" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Email&lt;/label>
                                        &lt;div class="flex">
                                            &lt;span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                                &lt;i class="ri-mail-line text-inherit">&lt;/i>
                                            &lt;/span>
                                            &lt;input type="email" id="email-4" class="form-input rounded-l-none bg-[#F8F8FC] dark:bg-dark-card-two"
                                                placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2944485b5d404748414c5b4748474d4c534a694e44484045074a4644">[email&#160;protected]</a>" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="mb-4">
                                        &lt;label for="password-4" class="block mb-2 font-medium text-gray-500 dark:text-dark-text">Password&lt;/label>
                                        &lt;div class="flex">
                                            &lt;span class="form-input-group input-icon !text-gray-900 dark:text-dark-text">
                                                &lt;i class="ri-lock-unlock-line">&lt;/i>
                                            &lt;/span>
                                            &lt;input type="password" id="password-4" class="form-input rounded-l-none bg-[#F8F8FC] dark:bg-dark-card-two"
                                                placeholder="**********" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- INFO FORM -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Info From</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="flex lg:flex-row flex-col gap-x-4">
                            <div class="w-full mb-4">
                                <label for="full_name" class="form-label">Full
                                    Name</label>
                                <input type="text" id="full_name" class="form-input" placeholder="Martina Hernandezc"
                                    autocomplete="off" required >
                            </div>
                            <div class="w-full mb-4">
                                <label for="address-1"
                                    class="form-label">Address</label>
                                <input type="text" id="address-1" class="form-input" >
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col gap-x-4">
                            <div class="w-full mb-4">
                                <label for="email-5"
                                    class="form-label">Email</label>
                                <input type="email" id="email-5" class="form-input"
                                    placeholder="martinahernandezc@gmail.com" autocomplete="off" required >
                            </div>
                            <div class="w-full mb-4">
                                <label for="password-5"
                                    class="form-label">Password</label>
                                <input type="password" id="password-5" class="form-input" placeholder="**********"
                                    autocomplete="off" required >
                            </div>
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="full_name" class="form-label">Full
                                                Name&lt;/label>
                                            &lt;input type="text" id="full_name" class="form-input" placeholder="Martina Hernandezc"
                                                autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="address-1"
                                                class="form-label">Address&lt;/label>
                                            &lt;input type="text" id="address-1" class="form-input" >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="email-5"
                                                class="form-label">Email&lt;/label>
                                            &lt;input type="email" id="email-5" class="form-input"
                                                placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e5888497918c8b848d80978b848b81809f86a58288848c89cb868a88">[email&#160;protected]</a>" autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="password-5"
                                                class="form-label">Password&lt;/label>
                                            &lt;input type="password" id="password-5" class="form-input" placeholder="**********"
                                                autocomplete="off" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- DATA FORM -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Data From</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <form class="p-6">
                        <div class="flex lg:flex-row flex-col gap-x-4">
                            <div class="w-full mb-4">
                                <label for="full_name_data"
                                    class="form-label">Full
                                    Name</label>
                                <input type="text" id="full_name_data" class="form-input" placeholder="Savannah Nguyen"
                                    autocomplete="off" required >
                            </div>
                            <div class="w-full mb-4">
                                <label for="email-6"
                                    class="form-label">Email</label>
                                <input type="email" id="email-6" class="form-input"
                                    placeholder="martinahernandezc@gmail.com" autocomplete="off" required >
                            </div>
                            <div class="w-full mb-4">
                                <label for="password-6"
                                    class="form-label">Password</label>
                                <input type="password" id="password-6" class="form-input" placeholder="**********"
                                    autocomplete="off" required >
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col gap-x-4 mb-2">
                            <div class="w-full mb-4">
                                <label for="location"
                                    class="form-label">Location</label>
                                <input type="text" id="location" class="form-input" >
                            </div>
                            <div class="w-full mb-4">
                                <label for="phone"
                                    class="form-label">Phone</label>
                                <input type="tel" id="phone" class="form-input" placeholder="(+33)7 55 55 33 70"
                                    autocomplete="off" required >
                            </div>
                            <div class="w-full mb-4">
                                <label for="state"
                                    class="form-label">State</label>
                                <input type="text" id="state" class="form-input" placeholder="8080 Railroad St."
                                    autocomplete="off" required >
                            </div>
                        </div>
                        <div class="mb-6">
                            <textarea class="summernote"></textarea>
                        </div>
                        <div class="flex items-center gap-2 select-none mb-6">
                            <input type="checkbox" checked
                                class="check check-primary-solid size-4 before:text-sm before:leading-none">
                            <label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                Out</label>
                        </div>
                        <button type="submit"
                            class="btn b-solid btn-primary-solid px-5 cursor-pointer">Save & Continue</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="full_name_data"
                                                class="form-label">Full
                                                Name&lt;/label>
                                            &lt;input type="text" id="full_name_data" class="form-input" placeholder="Savannah Nguyen"
                                                autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="email-6"
                                                class="form-label">Email&lt;/label>
                                            &lt;input type="email" id="email-6" class="form-input"
                                                placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513c302325383f303934233f303f35342b3211363c30383d7f323e3c">[email&#160;protected]</a>" autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="password-6"
                                                class="form-label">Password&lt;/label>
                                            &lt;input type="password" id="password-6" class="form-input" placeholder="**********"
                                                autocomplete="off" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4 mb-2">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="location"
                                                class="form-label">Location&lt;/label>
                                            &lt;input type="text" id="location" class="form-input" >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="phone"
                                                class="form-label">Phone&lt;/label>
                                            &lt;input type="tel" id="phone" class="form-input" placeholder="(+33)7 55 55 33 70"
                                                autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="state"
                                                class="form-label">State&lt;/label>
                                            &lt;input type="text" id="state" class="form-input" placeholder="8080 Railroad St."
                                                autocomplete="off" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="mb-6">
                                        &lt;div class="summernote">&lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 cursor-pointer">Save & Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection