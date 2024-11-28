<section>
    <div class="grid grid-cols-1 md:grid-cols-5">
        <!-- Left Image Section -->
        <div class="md:col-span-2">
            <img src="{{ asset('images/newsletter.jpg') }}" alt="Pets" class="w-full h-full object-cover">
        </div>
        <!-- Right Text Section -->
        <div
            class="md:col-span-3 bg-primary text-white pt-10 lg:py-[120px] lg:px-[60px] pb-20 px-5 flex flex-col gap-y-10 justify-center">
            <div>
                <h1 class="text-3xl leading-[48px] xl:text-5xl xl:leading-[72px] font-semibold mb-4">Subscribe to Our
                    Newsletter for Pet Updates and News!</h1>
                <p class="text-base xl:text-lg leading-relaxed  mb-8">Stay in the loop with the latest updates! Join our
                    newsletter to receive news, event announcements, and heartwarming stories directly to your inbox.
                </p>
            </div>
            <form class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative border border-white rounded-lg">
                    <input type="email" placeholder="Type your email here..."
                        class="w-full py-3 pl-10 pr-4 bg-transparent rounded-l-md text-white focus:outline-none" />
                    <i class="fas fa-envelope absolute text-white left-3 top-1/2 transform -translate-y-1/2"></i>
                </div>
                <button type="submit"
                    class="bg-white text-green-text font-semibold py-3 px-6 rounded-lg hover:bg-gray-100">Subscribe
                    Now</button>
            </form>
        </div>
    </div>

</section>
