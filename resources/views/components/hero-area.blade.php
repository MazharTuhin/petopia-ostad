<section class="relative bg-primary">
    <div class="flex flex-col md:flex-row items-center justify-between h-screen">
        <!-- Text Section -->
        <div class="md:w-1/2 py-12 px-5 lg:px-10 xl:px-14 md:self-start space-y-4">
            <h1
                class="text-white text-3xl md:text-4xl md:leading-[48px] lg:text-[48px] lg:leading-[68px] xl:text-5xl xl:leading-[78px] 2xl:text-6xl 2xl:leading-[90px] tracking-wide leading-[48px]">
                Embrace Endless Love with Your New Furry Best Friend.
            </h1>
            <p class="text-white font-light text-xs lg:text-sm lg:leading-[32.4px] tracking-wide leading-[25.2px]">
                Embrace endless love with your new furry best friend.
                Adopt now and start creating unforgettable memories together.
            </p>
        </div>

        <!-- Image Section -->
        <img src="{{ asset('images/hero-image.jpg') }}" alt="Hero Image"
            class="w-full md:w-1/2 h-full object-cover object-left-bottom">
    </div>
    <!-- Search Form -->
    <div
        class="hidden md:block lg:max-w-[970px] xl:max-w-[1170px] 2xl:max-w-[1320px] lg:container absolute bottom-4 lg:bottom-10 md:left-6 lg:left-1/2 lg:transform lg:-translate-x-1/2 mx-auto bg-white rounded-xl shadow-lg p-3 lg:py-12 lg:px-6">
        <h1 class="text-2xl font-semibold text-green-text mb-2 lg:mb-10">Find Your New Best Friend</h1>
        <div class="grid lg:grid-cols-6 lg:gap-4">
            <!-- Location -->
            <div class="lg:col-span-1 mb-1 lg:mb-0">
                <label class="text-sm font-medium text-gray-500 mb-1 lg:mb-2 block">Your Location</label>
                <div class="flex items-center bg-gray-100 border border-gray-300 rounded-lg px-3 py-2">
                    <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                    <select class="bg-transparent text-gray-900 text-sm font-medium w-full focus:outline-none">
                        <option value="jakarta-selatan">Jakarta Selatan, Indonesia</option>
                        <option value="other-location">Other Location</option>
                    </select>
                </div>
            </div>
            <!-- Pet Type -->
            <div class="lg:col-span-1 mb-1 lg:mb-0">
                <label class="text-sm font-medium text-gray-500 mb-1 lg:mb-2 block">Pet Type</label>
                <div class="flex items-center bg-gray-100 border border-gray-300 rounded-lg px-3 py-2">
                    <i class="fas fa-paw text-gray-500 mr-2"></i>
                    <select class="bg-transparent text-gray-900 text-sm font-medium w-full focus:outline-none">
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="other-pet">Other Pet</option>
                    </select>
                </div>
            </div>
            <!-- Breed -->
            <div class="lg:col-span-1 mb-1 lg:mb-0">
                <label class="text-sm font-medium text-gray-500 mb-1 lg:mb-2 block">Breed</label>
                <div class="flex items-center bg-gray-100 border border-gray-300 rounded-lg px-3 py-2">
                    <i class="fas fa-paw text-gray-500 mr-2"></i>
                    <select class="bg-transparent text-gray-900 text-sm font-medium w-full focus:outline-none">
                        <option value="all">All</option>
                        <option value="bulldog">Bulldog</option>
                        <option value="labrador">Labrador</option>
                        <option value="poodle">Poodle</option>
                    </select>
                </div>
            </div>
            <!-- Gender -->
            <div class="lg:col-span-1 mb-1 lg:mb-0">
                <label class="text-sm font-medium text-gray-500 mb-1 lg:mb-2 block">Gender</label>
                <div class="flex items-center bg-gray-100 border border-gray-300 rounded-lg px-3 py-2">
                    <i class="fas fa-venus text-gray-500 mr-2"></i>
                    <select class="bg-transparent text-gray-900 text-sm font-medium w-full focus:outline-none">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>
            </div>
            <!-- Age -->
            <div class="lg:col-span-1 mb-1 lg:mb-0">
                <label class="text-sm font-medium text-gray-500 mb-1 lg:mb-2 block">Age</label>
                <div class="flex items-center bg-gray-100 border border-gray-300 rounded-lg px-3 py-2">
                    <i class="fas fa-birthday-cake text-gray-500 mr-2"></i>
                    <select class="bg-transparent text-gray-900 text-sm font-medium w-full focus:outline-none">
                        <option value="1-3">1-3 Years Old</option>
                        <option value="4-6">4-6 Years Old</option>
                        <option value="7-plus">7+ Years Old</option>
                    </select>
                </div>
            </div>
            <!-- Search Button -->
            <div class="lg:col-span-1 flex items-end">
                <button
                    class="w-full bg-primary text-white text-sm font-medium py-2.5 px-4 rounded-lg hover:bg-green-800">
                    Search
                </button>
            </div>
        </div>
    </div>
</section>
