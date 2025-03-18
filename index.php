<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elevate | Modern Business Solutions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');

    :root {
      --primary: #0f766e;
      --primary-light: #14b8a6;
      --secondary: #334155;
      --dark: #0f172a;
      --light: #f8fafc;
      --accent: #f59e0b;
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--secondary);
      background-color: var(--light);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Sora', sans-serif;
      color: var(--dark);
    }

    .btn-primary {
      background-color: var(--primary);
      color: white;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--primary-light);
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(15, 118, 110, 0.2), 0 4px 6px -2px rgba(15, 118, 110, 0.1);
    }

    .btn-secondary {
      background-color: white;
      color: var(--primary);
      border: 1px solid var(--primary);
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background-color: rgba(15, 118, 110, 0.05);
      transform: translateY(-2px);
    }

    .card {
      border-radius: 16px;
      overflow: hidden;
      transition: all 0.3s ease;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .feature-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 56px;
      width: 56px;
      border-radius: 12px;
      background-color: rgba(15, 118, 110, 0.1);
      color: var(--primary);
      margin-bottom: 1.5rem;
    }

    .section-pattern {
      background-color: #f8fafc;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%230f766e' fill-opacity='0.03'%3E%3Cpath d='M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 20.83l2.83-2.83 1.41 1.41L1.41 22.24H0v-1.41zM0 3.07l2.83-2.83 1.41 1.41L1.41 4.48H0V3.07zM17.76 40l2.83-2.83 1.41 1.41L19.17 40h-1.41zM17.76 22.24l2.83-2.83 1.41 1.41L19.17 22.24h-1.41zM17.76 4.48l2.83-2.83 1.41 1.41L19.17 4.48h-1.41zM35.52 40l2.83-2.83 1.41 1.41L37.93 40h-2.41zM35.52 22.24l2.83-2.83 1.41 1.41L37.93 22.24h-2.41zM35.52 4.48l2.83-2.83 1.41 1.41L37.93 4.48h-2.41zM1.41 20l2.83-2.83 1.41 1.41L2.83 21.41 1.41 20zM1.41 2.24l2.83-2.83 1.41 1.41L2.83 3.65 1.41 2.24zM19.17 20l2.83-2.83 1.41 1.41-2.83 2.83-1.41-1.41zM19.17 2.24l2.83-2.83 1.41 1.41-2.83 2.83-1.41-1.41zM36.93 20l2.83-2.83 1.41 1.41-2.83 2.83-1.41-1.41zM36.93 2.24l2.83-2.83 1.41 1.41-2.83 2.83-1.41-1.41z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .testimonial-card {
      border-radius: 16px;
      overflow: hidden;
      background: white;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.05);
    }

    .stats-value {
      font-family: 'Sora', sans-serif;
      font-weight: 700;
      font-size: 2.5rem;
      line-height: 1;
      margin-bottom: 0.5rem;
      color: var(--primary);
    }

    .blur-bg {
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }

    .nav-link {
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .arrow-link {
      display: inline-flex;
      align-items: center;
      color: var(--primary);
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .arrow-link svg {
      transition: transform 0.3s ease;
      margin-left: 0.5rem;
    }

    .arrow-link:hover svg {
      transform: translateX(4px);
    }

    .highlight {
      position: relative;
      display: inline-block;
    }

    .highlight::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      height: 30%;
      width: 100%;
      background-color: rgba(20, 184, 166, 0.2);
      z-index: -1;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="fixed w-full z-50 bg-white/90 blur-bg shadow-sm">
    <div class="container mx-auto px-6 py-4">
      <div class="flex justify-between items-center">
        <a href="#" class="flex items-center space-x-2">
          <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="38" height="38" rx="8" fill="#0F766E" />
            <path d="M12 19H26M19 12V26" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-xl font-bold">Elevate</span>
        </a>

        <div class="hidden md:flex items-center space-x-8">
          <a href="#services" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 transition-colors">Services</a>
          <a href="#about" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 transition-colors">About</a>
          <a href="#testimonials" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 transition-colors">Testimonials</a>
          <a href="#team" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 transition-colors">Our Team</a>
          <a href="#contact" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 transition-colors">Contact</a>
          <button class="btn-primary px-5 py-2 text-sm font-medium">Get Started</button>
        </div>

        <div class="md:hidden">
          <button class="text-gray-500 hover:text-green-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-28 pb-20 md:pt-36 md:pb-28">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 md:pr-10 mb-10 md:mb-0">
          <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">INNOVATIVE BUSINESS SOLUTIONS</h5>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            Transform Your Business <span class="highlight">Strategy</span>
          </h1>
          <p class="text-lg text-gray-600 mb-8 max-w-lg leading-relaxed">
            We help businesses scale through strategic planning, digital transformation, and actionable insights that drive measurable results.
          </p>
          <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-12">
            <button class="btn-primary text-white px-8 py-3 font-medium">
              Get Started
            </button>
            <button class="btn-secondary px-8 py-3 font-medium flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Watch Demo
            </button>
          </div>
          <div class="flex items-center space-x-6">
            <div class="flex -space-x-2">
              <img src="https://www.shutterstock.com/image-vector/customer-care-icon-social-help-600nw-1921058849.jpg" alt="Client" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://www.shutterstock.com/image-vector/customer-care-icon-social-help-600nw-1921058849.jpg" alt="Client" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://www.shutterstock.com/image-vector/customer-care-icon-social-help-600nw-1921058849.jpg" alt="Client" class="w-8 h-8 rounded-full border-2 border-white">
              <img src="https://www.shutterstock.com/image-vector/customer-care-icon-social-help-600nw-1921058849.jpg" alt="Client" class="w-8 h-8 rounded-full border-2 border-white">
              <span class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-white bg-gray-100 text-xs font-medium">+42</span>
            </div>
            <div>
              <p class="text-sm text-gray-500">Trusted by <span class="font-semibold text-green-700">300+</span> businesses</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 relative">
          <div class="relative rounded-2xl overflow-hidden shadow-xl">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-teal-700/20 mix-blend-multiply"></div>
            <img src="https://images.unsplash.com/photo-1634482899780-6ac6b92c656e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGFib3V0JTIwdXN8ZW58MHx8MHx8fDA%3D" alt="Business Strategy" class="w-full h-auto rounded-2xl">
          </div>
          <div class="absolute -bottom-10 -left-10 bg-white rounded-lg shadow-lg p-6 w-56 z-10 hidden md:block">
            <div class="flex items-center space-x-3 mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 6V12L16 14" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="font-medium text-gray-900">Time Saved</span>
            </div>
            <p class="text-3xl font-bold text-green-700">78%</p>
            <p class="text-sm text-gray-500 mt-2">Average reduction in operational time</p>
          </div>
          <div class="absolute -top-10 -right-10 bg-white rounded-lg shadow-lg p-6 w-56 z-10 hidden md:block">
            <div class="flex items-center space-x-3 mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2V6" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 18V22" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.93 4.93L7.76 7.76" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.24 16.24L19.07 19.07" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M2 12H6" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18 12H22" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.93 19.07L7.76 16.24" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.24 7.76L19.07 4.93" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="font-medium text-gray-900">Growth</span>
            </div>
            <p class="text-3xl font-bold text-green-700">36%</p>
            <p class="text-sm text-gray-500 mt-2">Average yearly business growth</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="py-12 bg-white border-y border-gray-100">
    <div class="container mx-auto px-6">
      <p class="text-center text-gray-500 text-sm mb-10 uppercase tracking-wider font-medium">Trusted by leading companies</p>
      <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
        <img src="https://images.unsplash.com/photo-1611262588024-d12430b98920?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Client logo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
        <img src="https://images.unsplash.com/photo-1611605698323-b1e99cfd37ea?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y2xpZW50cyUyMGljb258ZW58MHx8MHx8fDA%3D" alt="Client logo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
        <img src="https://images.unsplash.com/photo-1611162616475-46b635cb6868?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNsaWVudHMlMjBpY29ufGVufDB8fDB8fHww" alt="Client logo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
        <img src="https://plus.unsplash.com/premium_photo-1675876811826-30f06674fb0b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNsaWVudHMlMjBpY29ufGVufDB8fDB8fHww" alt="Client logo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
        <img src="https://images.unsplash.com/photo-1611162618071-b39a2ec055fb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGNsaWVudHMlMjBpY29ufGVufDB8fDB8fHww" alt="Client logo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300">
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">OUR SERVICES</h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Comprehensive Business Solutions</h2>
        <p class="text-lg text-gray-600">
          We offer a wide range of services designed to help your business grow, optimize operations, and stay ahead of the competition.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 16V8.00002C20.9996 7.6493 20.9071 7.30483 20.7315 7.00119C20.556 6.69754 20.3037 6.44539 20 6.27002L13 2.27002C12.696 2.09449 12.3511 2.00208 12 2.00208C11.6489 2.00208 11.304 2.09449 11 2.27002L4 6.27002C3.69626 6.44539 3.44398 6.69754 3.26846 7.00119C3.09294 7.30483 3.00036 7.6493 3 8.00002V16C3.00036 16.3508 3.09294 16.6952 3.26846 16.9989C3.44398 17.3025 3.69626 17.5547 4 17.73L11 21.73C11.304 21.9056 11.6489 21.998 12 21.998C12.3511 21.998 12.696 21.9056 13 21.73L20 17.73C20.3037 17.5547 20.556 17.3025 20.7315 16.9989C20.9071 16.6952 20.9996 16.3508 21 16Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M3.27002 6.96002L12 12L20.73 6.96002" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 22.08V12" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Business Strategy</h3>
          <p class="text-gray-600 mb-6">
            Develop comprehensive strategies to achieve your business goals with our expert consulting services.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>

        <!-- Service 2 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.0001 2L3.00006 14H12.0001L11.0001 22L21.0001 10H12.0001L13.0001 2Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Digital Transformation</h3>
          <p class="text-gray-600 mb-6">
            Modernize your business with cutting-edge technology solutions that drive efficiency and growth.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>

        <!-- Service 3 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 20V10" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 20V4" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 20V14" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Market Analysis</h3>
          <p class="text-gray-600 mb-6">
            Gain valuable insights into your industry, competitors, and customers to inform strategic decisions.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>

        <!-- Service 4 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50053 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50053 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Process Optimization</h3>
          <p class="text-gray-600 mb-6">
            Streamline your operations and eliminate inefficiencies to reduce costs and improve productivity.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>

        <!-- Service 5 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 8.00001C16 8.00001 17.5 6.50001 17.5 4.00001C17.5 1.50001 16 1.00001 16 1.00001" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M8 8.00001C8 8.00001 6.5 6.50001 6.5 4.00001C6.5 1.50001 8 1.00001 8 1.00001" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 16V22" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 16C14.2091 16 16 14.2091 16 12V8H8V12C8 14.2091 9.79086 16 12 16Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M8 2H16" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Leadership Development</h3>
          <p class="text-gray-600 mb-6">
            Build a strong leadership team with our executive coaching and management training programs.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>

        <!-- Service 6 -->
        <div class="card p-8 bg-white">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 11L12 14L22 4" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3">Performance Management</h3>
          <p class="text-gray-600 mb-6">
            Develop effective performance metrics and management systems to drive accountability and results.
          </p>
          <a href="#" class="arrow-link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-50 section-pattern">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 mb-10 md:mb-0 md:pr-12">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGFib3V0JTIwdXN8ZW58MHx8MHx8fDA%3D" alt="About Us" class="rounded-2xl shadow-xl relative z-10">
            <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-teal-100 rounded-2xl z-0"></div>
            <div class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 z-20">
              <div class="flex items-center space-x-4 mb-4">
                <div class="p-2 rounded-full bg-teal-100">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3746C6.51168 20.6274 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22 4L12 14.01L9 11.01" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold">15+ Years</h4>
                  <p class="text-sm text-gray-500">Of business experience</p>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="p-2 rounded-full bg-teal-100">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="#0F766E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold">500+ Clients</h4>
                  <p class="text-sm text-gray-500">Worldwide satisfied</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">ABOUT US</h5>
          <h2 class="text-3xl md:text-4xl font-bold mb-6">We Help Businesses <span class="highlight">Succeed</span></h2>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Founded in 2008, Elevate has grown from a small consulting firm to a global business solutions provider. Our mission is to help businesses of all sizes overcome challenges, optimize their operations, and achieve sustainable growth.
          </p>
          <p class="text-gray-600 mb-8 leading-relaxed">
            With a team of experienced professionals across multiple disciplines, we combine industry expertise with innovative thinking to deliver tailored solutions that address your unique business needs.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
            <div class="flex items-start">
              <div class="mr-4 text-teal-600">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3746C6.51168 20.6274 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-2">Client-Centric Approach</h4>
                <p class="text-gray-600">We put your business needs and goals at the center of everything we do.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="mr-4 text-teal-600">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3746C6.51168 20.6274 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-2">Innovative Solutions</h4>
                <p class="text-gray-600">We embrace innovation and technology to develop forward-thinking strategies.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="mr-4 text-teal-600">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3746C6.51168 20.6274 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-2">Expert Team</h4>
                <p class="text-gray-600">Our consultants have extensive experience across various industries.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="mr-4 text-teal-600">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3746C6.51168 20.6274 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-2">Results-Driven</h4>
                <p class="text-gray-600">We measure our success by the tangible results we deliver to our clients.</p>
              </div>
            </div>
          </div>

          <button class="btn-primary text-white px-8 py-3 font-medium">
            Learn More About Us
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="stats-value">98%</div>
          <p class="text-gray-600">Client satisfaction rate</p>
        </div>
        <div class="text-center">
          <div class="stats-value">500+</div>
          <p class="text-gray-600">Projects completed</p>
        </div>
        <div class="text-center">
          <div class="stats-value">48%</div>
          <p class="text-gray-600">Average efficiency increase</p>
        </div>
        <div class="text-center">
          <div class="stats-value">12+</div>
          <p class="text-gray-600">Industry specializations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-gray-50 section-pattern">
    <div class="container mx-auto px-6">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">TESTIMONIALS</h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">What Our Clients Say</h2>
        <p class="text-lg text-gray-600">
          Don't just take our word for it — hear from some of our satisfied clients.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="testimonial-card p-8">
          <div class="text-teal-500 mb-6">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 11H6.21C6.07929 11 5.95506 10.9539 5.85839 10.8701C5.76171 10.7864 5.7 10.6713 5.7 10.55C5.7 8.7 6.1 7.9 8 7.9V6C5 6 4 8 4 10.5C4 13 5 15 8 15C9.5 15 10 14 10 12.5V11ZM20 11H16.21C16.0793 11 15.9551 10.9539 15.8584 10.8701C15.7617 10.7864 15.7 10.6713 15.7 10.55C15.7 8.7 16.1 7.9 18 7.9V6C15 6 14 8 14 10.5C14 13 15 15 18 15C19.5 15 20 14 20 12.5V11Z" fill="currentColor" />
            </svg>
          </div>
          <p class="text-gray-600 mb-8">
            Elevate transformed our business operations completely. Their strategic guidance helped us increase efficiency by 37% and significantly reduce costs. The team is professional, knowledgeable, and truly invested in our success.
          </p>
          <div class="flex items-center">
            <img src="https://www.ultimatebeaver.com/wp-content/uploads/2021/04/photo-gallery-img-02.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold">Sarah Johnson</h4>
              <p class="text-sm text-gray-500">CEO, TechSolutions Inc.</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card p-8">
          <div class="text-teal-500 mb-6">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 11H6.21C6.07929 11 5.95506 10.9539 5.85839 10.8701C5.76171 10.7864 5.7 10.6713 5.7 10.55C5.7 8.7 6.1 7.9 8 7.9V6C5 6 4 8 4 10.5C4 13 5 15 8 15C9.5 15 10 14 10 12.5V11ZM20 11H16.21C16.0793 11 15.9551 10.9539 15.8584 10.8701C15.7617 10.7864 15.7 10.6713 15.7 10.55C15.7 8.7 16.1 7.9 18 7.9V6C15 6 14 8 14 10.5C14 13 15 15 18 15C19.5 15 20 14 20 12.5V11Z" fill="currentColor" />
            </svg>
          </div>
          <p class="text-gray-600 mb-8">
            As a rapidly growing startup, we needed strategic direction. Elevate provided a comprehensive roadmap that helped us secure funding and scale effectively. Their market analysis was spot-on and gave us a competitive edge.
          </p>
          <div class="flex items-center">
            <img src="https://www.ultimatebeaver.com/wp-content/uploads/2021/04/photo-gallery-img-02.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold">Michael Chen</h4>
              <p class="text-sm text-gray-500">Founder, InnovateMind</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card p-8">
          <div class="text-teal-500 mb-6">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 11H6.21C6.07929 11 5.95506 10.9539 5.85839 10.8701C5.76171 10.7864 5.7 10.6713 5.7 10.55C5.7 8.7 6.1 7.9 8 7.9V6C5 6 4 8 4 10.5C4 13 5 15 8 15C9.5 15 10 14 10 12.5V11ZM20 11H16.21C16.0793 11 15.9551 10.9539 15.8584 10.8701C15.7617 10.7864 15.7 10.6713 15.7 10.55C15.7 8.7 16.1 7.9 18 7.9V6C15 6 14 8 14 10.5C14 13 15 15 18 15C19.5 15 20 14 20 12.5V11Z" fill="currentColor" />
            </svg>
          </div>
          <p class="text-gray-600 mb-8">
            The digital transformation strategy implemented by Elevate revolutionized our outdated systems. Our team's productivity has improved tremendously, and customer satisfaction scores have increased by 42%. I highly recommend their services.
          </p>
          <div class="flex items-center">
            <img src="https://www.ultimatebeaver.com/wp-content/uploads/2021/04/photo-gallery-img-02.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h4 class="font-bold">Amanda Rodriguez</h4>
              <p class="text-sm text-gray-500">Operations Director, Global Retail</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">OUR TEAM</h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Meet Our Experts</h2>
        <p class="text-lg text-gray-600">
          Our team of experienced professionals is dedicated to helping your business succeed.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Team Member 1 -->
        <div class="card overflow-hidden">
          <div class="relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbQg_ISwwljpWFF9kNu8aifEqQYq5v634HhA&s" alt="Team Member" class="w-full h-auto">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent text-white">
              <h3 class="font-bold text-lg">Robert Thompson</h3>
              <p class="text-sm text-gray-200">CEO & Founder</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Former management consultant with 20+ years of experience helping businesses scale and optimize operations.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="card overflow-hidden">
          <div class="relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbQg_ISwwljpWFF9kNu8aifEqQYq5v634HhA&s" alt="Team Member" class="w-full h-auto">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent text-white">
              <h3 class="font-bold text-lg">Jennifer Lee</h3>
              <p class="text-sm text-gray-200">Chief Strategy Officer</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Strategic visionary with experience in developing growth strategies for Fortune 500 companies and startups alike.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="card overflow-hidden">
          <div class="relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbQg_ISwwljpWFF9kNu8aifEqQYq5v634HhA&s" alt="Team Member" class="w-full h-auto">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent text-white">
              <h3 class="font-bold text-lg">Marcus Williams</h3>
              <p class="text-sm text-gray-200">Digital Transformation Lead</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Technology expert specialized in guiding businesses through digital evolution and implementing cutting-edge solutions.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 4 -->
        <div class="card overflow-hidden">
          <div class="relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbQg_ISwwljpWFF9kNu8aifEqQYq5v634HhA&s" alt="Team Member" class="w-full h-auto">
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent text-white">
              <h3 class="font-bold text-lg">Sophia Garcia</h3>
              <p class="text-sm text-gray-200">Operations Director</p>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Process optimization expert who has helped dozens of companies streamline their operations and reduce costs.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-green-700 transition-colors">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-gray-50 section-pattern">
    <div class="container mx-auto px-6">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h5 class="text-teal-600 font-semibold mb-4 tracking-wide">CONTACT US</h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Get In Touch</h2>
        <p class="text-lg text-gray-600">
          Have a question or ready to start your business transformation? Contact us today.
        </p>
      </div>

      <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="w-full md:w-1/2 p-10">
          <h3 class="text-2xl font-bold mb-6">Send us a message</h3>
          <form>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-medium mb-2" for="name">Your Name</label>
              <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" id="name" type="text" placeholder="John Doe">
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-medium mb-2" for="email">Your Email</label>
              <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" id="email" type="email" placeholder="john@example.com">
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-medium mb-2" for="subject">Subject</label>
              <input class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" id="subject" type="text" placeholder="Business Inquiry">
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-medium mb-2" for="message">Message</label>
              <textarea class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent h-32" id="message" placeholder="Your message here..."></textarea>
            </div>
            <button type="submit" class="btn-primary text-white px-6 py-3 font-medium w-full">
              Send Message
            </button>
          </form>
        </div>
        <div class="w-full md:w-1/2 bg-green-700 p-10 text-white">
          <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
          <p class="mb-8">
            Feel free to reach out to us through any of these channels. We're here to help and will respond promptly.
          </p>

          <div class="space-y-6">
            <div class="flex items-start">
              <div class="mr-4 mt-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-1">Our Office</h4>
                <p class="text-teal-100">123 Business Avenue, Suite 400<br>Los Angeles, CA 90001</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="mr-4 mt-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.18999 12.85C3.49997 10.2412 2.44824 7.27097 2.11999 4.18C2.095 3.90347 2.12787 3.62476 2.21649 3.36163C2.30512 3.09849 2.44756 2.85669 2.63476 2.65162C2.82196 2.44655 3.0498 2.28271 3.30379 2.17052C3.55777 2.05833 3.83233 2.00026 4.10999 2H7.10999C7.5953 1.9952 8.06579 2.16705 8.43376 2.48351C8.80173 2.79996 9.04207 3.23942 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.35999 8.64L8.08999 9.91C9.51355 12.4135 11.5864 14.4864 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1858 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-1">Phone</h4>
                <p class="text-teal-100">+1 (555) 123-4567</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="mr-4 mt-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4 class="font-bold mb-1">Email</h4>
                <p class="text-teal-100">info@elevatebusiness.com</p>
              </div>
            </div>
          </div>

          <div class="mt-12">
            <h4 class="font-bold mb-4">Follow Us</h4>
            <div class="flex space-x-4">
              <a href="#" class="bg-teal-800 hover:bg-teal-600 transition-colors w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="bg-teal-800 hover:bg-teal-600 transition-colors w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="bg-teal-800 hover:bg-teal-600 transition-colors w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="bg-teal-800 hover:bg-teal-600 transition-colors w-10 h-10 rounded-full flex items-center justify-center">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-green-700 text-white">
    <div class="container mx-auto px-6">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
        <p class="text-lg text-teal-100 mb-8">
          Take the first step towards optimizing your operations and driving sustainable growth.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
          <button class="bg-white text-green-700 hover:bg-teal-50 px-8 py-3 rounded-lg font-medium transition-colors">
            Schedule a Consultation
          </button>
          <button class="border border-white text-white hover:bg-white/10 px-8 py-3 rounded-lg font-medium transition-colors">
            Learn More
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-10">
        <div>
          <div class="flex items-center space-x-2 mb-6">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="38" height="38" rx="8" fill="#0F766E" />
              <path d="M12 19H26M19 12V26" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xl font-bold">Elevate</span>
          </div>
          <p class="text-gray-400 mb-4">
            Business solutions that drive innovation and transform companies for sustainable growth.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-4">Services</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Business Strategy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Digital Transformation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Market Analysis</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Process Optimization</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Leadership Development</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-4">Company</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Team</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-4">Newsletter</h4>
          <p class="text-gray-400 mb-4">Subscribe to our newsletter for business insights and updates.</p>
          <form class="mb-4">
            <div class="flex">
              <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg focus:outline-none w-full">
              <button type="submit" class="bg-teal-600 hover:bg-green-700 px-4 py-2 rounded-r-lg transition-colors">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
          <p class="text-gray-500 text-sm">
            By subscribing, you agree to our Privacy Policy and consent to receive updates.
          </p>
        </div>
      </div>

      <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-500 mb-4 md:mb-0">
          &copy; 2025 Elevate Business Solutions. All rights reserved.
        </p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-500 hover:text-white transition-colors">Privacy</a>
          <a href="#" class="text-gray-500 hover:text-white transition-colors">Terms</a>
          <a href="#" class="text-gray-500 hover:text-white transition-colors">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
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
        <a href="#services" class="block py-2 text-sm font-medium text-gray-700 hover:text-green-700">Services</a>
        <a href="#about" class="block py-2 text-sm font-medium text-gray-700 hover:text-green-700">About</a>
        <a href="#testimonials" class="block py-2 text-sm font-medium text-gray-700 hover:text-green-700">Testimonials</a>
        <a href="#team" class="block py-2 text-sm font-medium text-gray-700 hover:text-green-700">Our Team</a>
        <a href="#contact" class="block py-2 text-sm font-medium text-gray-700 hover:text-green-700">Contact</a>
        <button class="btn-primary text-white px-6 py-2 rounded-lg font-medium w-full mt-4 text-center">Get Started</button>
      `;

      // Insert mobile menu after navigation container
      document.querySelector('nav .container').appendChild(mobileMenu);

      // Add click event to toggle button
      menuToggle.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;
        mobileMenu.style.display = isMenuOpen ? 'block' : 'none';
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
  </script>
</body>

</html>