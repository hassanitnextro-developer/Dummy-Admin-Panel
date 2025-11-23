@extends('dashboard.layouts.main')
@section('content')

    <!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <!-- Start New Course Category -->
        <form action="https://template.codexshaper.com/admin/lms-hub/all-instructor.html">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-full lg:col-span-7 card p-4 lg:p-6">
                    <h6 class="card-title">Add New Instructor</h6>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-5 mt-7 pt-0.5">
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-first-name" class="form-label">First Name *</label>
                            <input type="text" id="instructor-first-name" placeholder="First Name" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-last-name" class="form-label">Last Name *</label>
                            <input type="text" id="instructor-last-name" placeholder="Last Name" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-phone" class="form-label">Phone Number *</label>
                            <input type="number" id="instructor-phone" placeholder="Phone Number" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-email" class="form-label">Email *</label>
                            <input type="email" id="instructor-email" placeholder="Email" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">Country *</label>
                            <select class="singleSelect" name="country">
                                <option selected disabled>Select Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                            </select>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">State *</label>
                            <select class="singleSelect" name="state">
                                <option selected disabled>Select State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                            </select>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">City *</label>
                            <select class="singleSelect" name="category">
                                <option selected disabled>Select City</option>
                                <option value="NYC">New York City</option>
                                <option value="LA">Los Angeles</option>
                                <option value="CHI">Chicago</option>
                                <option value="HOU">Houston</option>
                                <option value="PHX">Phoenix</option>
                                <option value="PHI">Philadelphia</option>
                                <option value="SA">San Antonio</option>
                            </select>
                        </div>
                        <div class="col-span-full leading-none">
                            <label for="address" class="form-label">Address *</label>
                            <input type="text" id="address" placeholder="Your Address" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full leading-none">
                            <label class="form-label">Meta Description</label>
                            <textarea class="summernote"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-5 card p-4 lg:p-6">
                    <h6 class="card-title">Add media files</h6>
                    <div class="mt-7 pt-0.5">
                        <p class="text-xs text-gray-500 dark:text-dark-text-two leading-none font-semibold mb-3">Profile (200x200)</p>
                        <label for="thumbnailsrc" class="file-container ac-bg text-xs leading-none font-semibold mb-3 cursor-pointer size-[200px] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border-four rounded-10 dk-theme-card-square">
                            <input type="file" id="thumbnailsrc" hidden class="img-src peer/file">
                            <span class="flex-center flex-col peer-[.uploaded]/file:hidden">
                                <span class="size-10 lg:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50">
                                    <img src="assets/images/icons/upload-file.svg" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 lg:w-auto">
                                </span>
                                <span class="mt-2 text-gray-500 dark:text-dark-text">Choose file</span>
                            </span>
                        </label>
                    </div>
                    <button type="submit" class="btn b-solid btn-primary-solid btn-lg w-max">Next</button>
                </div>
            </div>
        </form>
        <!-- End New Course Category -->

    </div>
    <!-- End Main Content -->

    @endsection