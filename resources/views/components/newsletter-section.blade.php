<section>
  <div class="grid grid-cols-1 md:grid-cols-5">
    <!-- Left Image Section -->
    <div class="md:col-span-2">
      <img src="{{ asset('images/newsletter.jpg') }}" alt="Pets" class="w-full h-full object-cover">
    </div>
    <!-- Right Text Section -->
    <div class="md:col-span-3 bg-primary text-white p-12 flex flex-col justify-center">
      <h1 class="text-3xl font-bold leading-tight mb-4">Subscribe to Our Newsletter for <br> Pet Updates and News!</h1>
      <p class="text-base leading-relaxed mb-8">Stay in the loop with the latest updates! Join our newsletter to receive news, event announcements, and heartwarming stories directly to your inbox.</p>
      <form class="flex">
        <div class="flex-1 relative">
          <input type="email" placeholder="Type your email here..." class="w-full py-3 pl-10 pr-4 rounded-l-md text-gray-900 focus:outline-none" />
          <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
        </div>
        <button type="submit" class="bg-white text-[#124b3d] font-semibold py-3 px-6 rounded-r-md hover:bg-gray-100">Subscribe Now</button>
      </form>
    </div>
  </div>
     
</section>