   // Navigation menu toggle functionality
   document.addEventListener('DOMContentLoaded', function() {
    // Get the hamburger button and mobile menu
    const menuToggle = document.querySelector('.md\\:hidden button');
    const mobileMenu = document.createElement('div');

    // Set initial state
    let isMenuOpen = false;

    // Create mobile menu content
    mobileMenu.className = 'md:hidden bg-white rounded-lg shadow-lg mt-2 py-2 px-4 absolute w-full left-0 z-50';
    mobileMenu.style.display = 'none';
    mobileMenu.innerHTML = `
  <a href="#features" class="block py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">Features</a>
  <a href="#solutions" class="block py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">Solutions</a>
  <a href="#testimonials" class="block py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">Testimonials</a>
  <a href="#process" class="block py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">How It Works</a>
  <a href="#pricing" class="block py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">Pricing</a>
  <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-indigo-700 transition-colors w-full mt-4 text-center">Get Started</button>
`;

    // Insert mobile menu after navigation container
    document.querySelector('nav .container').appendChild(mobileMenu);

    // Add click event to toggle button
    menuToggle.addEventListener('click', function() {
      isMenuOpen = !isMenuOpen;
      mobileMenu.style.display = isMenuOpen ? 'block' : 'none';

      // Update icon if needed
      // Uncomment if you want to change the icon when open
      /*
      if (isMenuOpen) {
        menuToggle.innerHTML = `
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        `;
      } else {
        menuToggle.innerHTML = `
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        `;
      }
      */
    });

    // Close menu when clicking links
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.style.display = 'none';
        isMenuOpen = false;
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target) && isMenuOpen) {
        mobileMenu.style.display = 'none';
        isMenuOpen = false;
      }
    });

    // Close menu on window resize if viewport becomes larger than mobile size
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 768 && isMenuOpen) {
        mobileMenu.style.display = 'none';
        isMenuOpen = false;
      }
    });
  });