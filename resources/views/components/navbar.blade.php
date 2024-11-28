<header>
    <!-- navbar goes here -->
<nav class="bg-white">
    <div class="py-4 px-6 md:px-9 lg:px-16">
      <div class="flex justify-between items-center">

        <div class="flex space-x-4 items-center">
          <!-- logo -->
          <div class="logo w-9 h-9 bg-primary flex items-center justify-center rounded-full">
            <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
              <i class="fa-solid fa-paw text-white"></i>
            </a>
          </div>
  
          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="#" class="py-5 px-3 text-muted hover:text-green-text">Home</a>
            <a href="#" class="py-5 px-3 text-muted hover:text-green-text">Adoot</a>
            <a href="#" class="py-5 px-3 text-muted hover:text-green-text">Get Involved</a>
            <a href="#" class="py-5 px-3 text-muted hover:text-green-text">Blog</a>
            <a href="#" class="py-5 px-3 text-muted hover:text-green-text">About Us</a>
          </div>
        </div>
  
        <!-- secondary nav -->
        <div class="hidden md:flex items-center space-x-2">
          <a href="" class="py-2 px-4 border border-border-cart rounded-lg">Login</a>
          <a href="" class="py-2 px-4 bg-primary hover:bg-green-800 text-white rounded-lg transition duration-300">Register</a>
        </div>
  
        <!-- mobile button goes here -->
        <div class="md:hidden flex items-center gap-2">
            <button  class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                </svg>                      
            </button>
            <button class="mobile-menu-button">
                <svg class="w-7 h-7 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
  
      </div>
    </div>
  
    <!-- mobile menu -->
    <div class="mobile-menu hidden md:hidden pb-4 border-b border-primary">
        <nav>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Adopt</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Get Involved</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Blog</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">About Us</a>
        </nav>
        <div class="px-4 space-y-2">
            <a href="#" class="block py-2 px-4 text-center border border-border-cart text-green-text">Login</a>
            <a href="#" class="block py-2 px-4 text-center bg-primary text-white rounded">Register</a>
        </div>
    </div>
  </nav>
</header>