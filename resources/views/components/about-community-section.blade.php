<section class="bg-white py-[60px] lg:py-[120px] px-5 lg:px-[60px]">
    <div class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2">
                <p class="text-green-text text-xl leading-9 md:mb-6">At Petopia, we're dedicated to rescuing and rehoming pets in need, ensuring they find the love they deserve. With compassion and community at our core, we aim to match each pet with their perfect forever family, fostering lifelong bonds of love.</p>
                <div class="hidden md:block">
                    <a href="#" class=" w-full md:w-auto block md:inline-block text-primary text-center border border-border-cart py-2.5 px-5 lg:py-4 lg:px-8xl:px-10 hover:bg-primary hover:text-white transition-colors duration-100 rounded-lg">
                        Join Our Community
                        <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                    </a> 
               </div>
            </div>
            {{-- Counters --}}
            <div class="grid grid-cols-2 lg:col-span-1 gap-6">
                <div class="text-center space-y-2">
                    <p class="text-4xl font-semibold text-green-text">200+</p>
                    <p class="text-muted">Shelters</p>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-4xl font-semibold text-green-text">200+</p>
                    <p class="text-muted">Shelters</p>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-4xl font-semibold text-green-text">200+</p>
                    <p class="text-muted">Shelters</p>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-4xl font-semibold text-green-text">200+</p>
                    <p class="text-muted">Shelters</p>
                </div>
            </div>
            <div>
                <a href="#" class="md:hidden w-full md:w-auto block text-primary text-center border border-border-cart py-2.5 px-5 hover:bg-primary hover:text-white transition-colors duration-100 rounded-lg">
                    Join Our Community
                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                </a> 
           </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="">
                <img src="{{asset('images/about-community-1.jpg')}}" alt="Pet Image 1" class="rounded-xl w-full h-[300px] xl:h-[380px] object-cover">
            </div>
            <div>
                <img src="{{asset('images/about-community-2.jpg')}}" alt="Pet Image 2" class="rounded-xl w-full h-[300px] xl:h-[380px] object-cover">
            </div>
        </div>
    </div>
</section>