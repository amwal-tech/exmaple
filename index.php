<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0"/>

  <!-- Primary Meta Tags -->
  <title>Checkout - Amwal Store | Secure and Flexible Bank Installments Payments</title>
  <meta name="title" content="Checkout - Amwal Store | Secure and Flexible Bank Installments Payments"/>
  <meta name="description" content="Complete your purchase securely with Amwal's advanced checkout system. Bank installments available with 0 fees. Fast, secure, throw 0% Sharia compliant 12 months installments."/>
  <meta name="keywords" content="amwal, checkout, payment gateway, bank installments, secure payment, saudi arabia, fintech, e-commerce"/>
  <meta name="author" content="Amwal"/>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png"/>
  <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png"/>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Checkout - Amwal Store | Secure and Flexible Bank Installments Payments"/>
  <meta property="og:description" content="Complete your purchase securely with Amwal's advanced checkout system. Bank installments available with 0 fees, throw 0% Sharia compliant 12 months installments."/>
  <meta property="og:image" content="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png"/>
  <meta property="og:url" content="https://example.amwal.tech"/>
  <meta property="og:site_name" content="Amwal Store"/>
  <meta property="og:locale" content="en_US"/>

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Checkout - Amwal Store | Secure and Flexible Bank Installments Payments"/>
  <meta name="twitter:description" content="Complete your purchase securely with Amwal's advanced checkout system. Bank installments available with 0 fees, throw 0% Sharia compliant 12 months installments."/>
  <meta name="twitter:image" content="https://media.licdn.com/dms/image/v2/D4D3DAQEmJdGRqNTsiQ/image-scale_191_1128/B4DZU3QO_xG8Ao-/0/1740388758185/amwal_tech_cover?e=1762182000&v=beta&t=v-LcAzFmkfNwzY_ngv4xaxP5G0DtGZhIXsIW9Mx9nsg"/>
  <meta name="twitter:site" content="@amwal_tech"/>
  <meta name="twitter:creator" content="@amwal_tech"/>

  <!-- Additional Meta Tags -->
  <meta name="theme-color" content="#2563eb"/>
  <meta name="msapplication-TileColor" content="#2563eb"/>
  <meta name="msapplication-TileImage" content="https://media.licdn.com/dms/image/v2/D4D3DAQEmJdGRqNTsiQ/image-scale_191_1128/B4DZU3QO_xG8Ao-/0/1740388758185/amwal_tech_cover?e=1762182000&v=beta&t=v-LcAzFmkfNwzY_ngv4xaxP5G0DtGZhIXsIW9Mx9nsg"/>

  <!-- Preconnect to external domains for performance -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/>
  <link rel="preconnect" href="https://cdn.prod.website-files.com" crossorigin/>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/amwal-checkout-button@latest/dist/checkout/checkout.esm.js"></script>

  <!-- Structured Data for E-commerce -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Checkout - Amwal Store",
      "description": "Complete your purchase securely with Amwal's advanced checkout system. Bank installments available with 0 fees, throw 0% Sharia compliant 12 months installments",
      "url": "https://example.amwal.tech",
      "mainEntity": {
        "@type": "Organization",
        "name": "Amwal",
        "url": "https://www.amwal.tech",
        "logo": "https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/63233e5f7a6ac8f35140a0f0_Vector.png",
        "sameAs": [
          "https://github.com/amwal-tech"
        ]
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer base {
      body {
        @apply bg-white;
      }
    }

    @layer components {
      .input-field {
        @apply w-full px-3 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-base;
      }

      .input-field:focus {
        @apply outline-none;
      }

      .btn-primary {
        @apply bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-4 rounded-md transition-all w-full text-base;
      }

      .section-header {
        @apply flex items-center justify-between mb-4 pb-3 border-b border-gray-200;
      }

      .breadcrumb {
        @apply flex items-center gap-2 text-sm flex-wrap;
      }

      .breadcrumb-item {
        @apply text-blue-600 hover:text-blue-700;
      }

      .breadcrumb-separator {
        @apply text-gray-400;
      }

      .payment-method {
        @apply border border-gray-300 rounded-md p-4 cursor-pointer transition-all hover:border-gray-400;
      }

      .payment-method.selected {
        @apply border-blue-600 bg-blue-50;
      }

      .order-summary-item {
        @apply flex gap-4 pb-4 border-b border-gray-200;
      }

      .header-nav {
        @apply bg-white border-b border-gray-200 sticky top-0 z-40;
      }

      .nav-link {
        @apply text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition-colors;
      }

      .nav-link.active {
        @apply text-blue-600 bg-blue-50;
      }

      .nav-button {
        @apply bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors;
      }

      .nav-button-outline {
        @apply border border-gray-300 hover:border-gray-400 text-gray-700 hover:text-gray-900 px-4 py-2 rounded-md text-sm font-medium transition-colors;
      }

      .env-badge {
        @apply inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium;
      }

      .env-badge.sandbox {
        @apply bg-yellow-100 text-yellow-800;
      }

      .env-badge.production {
        @apply bg-green-100 text-green-800;
      }

      .env-badge.custom {
        @apply bg-purple-100 text-purple-800;
      }

      .env-toolbar {
        @apply fixed bottom-6 right-6 z-50 bg-white rounded-lg shadow-2xl border border-gray-300;
        max-width: 400px;
        transition: all 0.3s ease;
      }

      .env-toolbar.collapsed {
        width: auto;
      }

      .env-toolbar.expanded {
        width: 400px;
      }

      .env-toolbar-header {
        @apply px-4 py-3 bg-gradient-to-r from-blue-600 to-blue-700 rounded-t-lg flex items-center justify-between cursor-pointer;
      }

      .env-toolbar-content {
        @apply p-4 max-h-96 overflow-y-auto;
      }

      .env-form-group {
        @apply mb-4;
      }

      .env-label {
        @apply block text-sm font-medium text-gray-700 mb-1;
      }

      .env-input {
        @apply w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500;
      }

      .env-select {
        @apply w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white;
      }

      .env-btn {
        @apply px-4 py-2 rounded-md text-sm font-medium transition-colors;
      }

      .env-btn-primary {
        @apply bg-blue-600 hover:bg-blue-700 text-white;
      }

      .env-btn-secondary {
        @apply bg-gray-200 hover:bg-gray-300 text-gray-700;
      }

      .env-toggle-btn {
        @apply fixed bottom-6 right-6 z-40 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-lg transition-all;
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .env-toggle-btn.toolbar-open {
        @apply opacity-0 pointer-events-none;
      }

      @media (max-width: 640px) {
        .env-toolbar {
          @apply bottom-0 right-0 left-0 rounded-t-lg rounded-b-none;
          max-width: 100%;
        }

        .env-toolbar.expanded {
          width: 100%;
        }

        .env-toggle-btn {
          @apply bottom-4 right-4;
          width: 48px;
          height: 48px;
        }

        .env-toolbar-content {
          max-height: 60vh;
        }
      }
    }

    .loading-overlay {
      @apply fixed inset-0 bg-white/90 backdrop-blur-sm flex items-center justify-center z-50;
      display: none;
    }

    .spinner {
      @apply w-10 h-10 border-3 border-gray-300 border-t-blue-600 rounded-full;
      animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .toast {
      @apply fixed top-5 right-5 p-4 rounded-md shadow-lg z-50 flex items-center gap-3;
      max-width: calc(100vw - 40px);
      transform: translateX(400px);
      transition: transform 0.3s ease;
    }

    @media (max-width: 640px) {
      .toast {
        @apply top-auto bottom-5 left-5 right-5 max-w-none;
        transform: translateY(200px);
      }

      .toast.visible {
        transform: translateY(0);
      }
    }

    .toast.visible {
      transform: translateX(0);
    }

    .toast.success {
      @apply bg-green-600 text-white;
    }

    .toast.error {
      @apply bg-red-600 text-white;
    }

    @media (max-width: 1024px) {
      .order-summary-sidebar {
        @apply border-b border-gray-200 bg-gray-50;
      }
    }

    @media (max-width: 768px) {
      /* Stack payment methods vertically on mobile */
      .payment-method {
        @apply mb-3;
      }

      /* Ensure buttons are full width on mobile */
      .btn-primary,
      .nav-button,
      .nav-button-outline {
        @apply w-full;
      }

      /* Better spacing on mobile */
      .input-field {
        @apply text-base; /* Prevent zoom on iOS */
      }

      /* Touch-friendly targets */
      .payment-method {
        @apply py-4;
      }
    }

    @media (max-width: 640px) {
      /* Smaller padding on mobile */
      .max-w-2xl,
      .max-w-xl {
        @apply px-4;
      }

      /* Stack discount code input and button */
      .discount-container {
        @apply flex-col;
      }

      .discount-container button {
        @apply w-full;
      }
    }

    .express-checkout {
      @apply border border-gray-300 rounded-md p-4 hover:bg-gray-50 transition-all cursor-pointer text-center font-medium;
      min-height: 48px; /* Ensure touch-friendly height */
    }

    .badge-quantity {
      @apply absolute -top-2 -right-2 bg-gray-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold;
    }

    /* Prevent iOS zoom on input focus */
    @supports (-webkit-touch-callout: none) {
      input,
      select,
      textarea {
        font-size: 16px !important;
      }
    }

    /* Better mobile scrolling */
    @media (max-width: 768px) {
      html {
        -webkit-text-size-adjust: 100%;
      }

      body {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }

      /* Ensure payment buttons are touch-friendly */
      .payment-method {
        min-height: 60px;
      }

      /* Make radio buttons larger on mobile */
      input[type="radio"] {
        width: 20px;
        height: 20px;
      }
      .desktop-menu {
        display: none;
      }
    }


  </style>
</head>
<body>

<!-- Header Navigation -->
<header class="header-nav">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex items-center gap-3">
        <a href="#" class="flex items-center">
          <img src="https://cdn.prod.website-files.com/62294ce746440b7bc08b4fc5/624352eb48193d537d329386_1-2-p-500.png"
               alt="Amwal Store" class="h-8">
        </a>
        <!-- Environment Badge -->
        <span id="env-badge" class="env-badge sandbox hidden md:inline-flex">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span id="env-text">Sandbox</span>
                </span>
      </div>
      <!-- Navigation Links -->
      <nav class="md:flex items-center space-x-8 desktop-menu">
        <a href="https://www.amwal.tech" class="nav-link flex items-center gap-2" target="_blank">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-4m4 0h-4m4 0H8m4 0H8"></path>
          </svg>
          Product
        </a>

        <a href="https://docs.amwal.tech" class="nav-link flex items-center gap-2" target="_blank"
           rel="noopener noreferrer">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          Docs
        </a>
        <a href="https://github.com/amwal-tech" class="nav-link flex items-center gap-2" target="_blank"
           rel="noopener noreferrer">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
          </svg>
          GitHub
        </a>
      </nav>

      <!-- Auth Buttons -->
      <div class="flex items-center space-x-4 desktop-menu">
        <a class="nav-button flex items-center gap-2" href="https://merchant.sa.amwal.tech" target="_blank" rel="noopener noreferrer">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
          </svg>
          Login
        </a>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="nav-link p-2">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="md:hidden hidden border-t border-gray-200 py-4">
      <div class="space-y-2">
        <div class="pb-2 border-b border-gray-200">
                    <span id="env-badge-mobile" class="env-badge sandbox inline-flex">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span id="env-text-mobile">Sandbox Mode</span>
                    </span>
        </div>
        <a href="https://www.amwal.tech" class="nav-link flex items-center gap-2" target="_blank">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-4m4 0h-4m4 0H8m4 0H8"></path>
          </svg>
          Product
        </a>

        <a href="https://docs.amwal.tech" class="nav-link flex items-center gap-2" target="_blank"
           rel="noopener noreferrer">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          Docs
        </a>
        <a href="https://github.com/amwal-tech" class="nav-link flex items-center gap-2" target="_blank"
           rel="noopener noreferrer">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
          </svg>
          GitHub
        </a>
        <div class="pt-4 border-t border-gray-200 space-y-2">
          <a class="nav-button w-full flex items-center justify-center gap-2" href="https://merchant.sa.amwal.tech" target="_blank"  rel="noopener noreferrer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
            Login
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Loading Overlay -->
<div id="loading-overlay" class="loading-overlay">
  <div class="spinner"></div>
</div>

<!-- Toast Container -->
<div id="toast" class="toast"></div>

<div class="min-h-screen lg:grid lg:grid-cols-2">

  <!-- Left Column - Checkout Form -->
  <div class="lg:border-r border-gray-200">
    <div class="max-w-2xl mx-auto px-6 sm:px-8 lg:px-12 py-6 lg:py-10">

      <!-- Logo & Breadcrumb -->
      <div class="mb-8">
        <nav class="breadcrumb">
          <a href="#" class="breadcrumb-item">Cart</a>
          <span class="breadcrumb-separator">›</span>
          <span class="text-gray-900 font-medium">Information</span>
          <span class="breadcrumb-separator">›</span>
          <span class="text-gray-400">Shipping</span>
          <span class="breadcrumb-separator">›</span>
          <span class="text-gray-400">Payment</span>
        </nav>
      </div>

      <!-- Express Checkout -->
      <div class="mb-8">
        <div class="text-sm text-gray-600 mb-4 text-center flex flex-col sm:flex-row items-center justify-center gap-2">
          <span>Bank Installment with Amwal</span>
          <span class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded-full font-medium">0 fees</span>
        </div>
        <div class="space-y-3">
          <amwal-checkout-button
            id="express-checkout-btn"
            amount="931.50"
            country-code="SA"
            locale="en"
            label="Pay with Amwal"
            address-required="false"
            class="w-full">
          </amwal-checkout-button>
        </div>
        <div class="relative my-6">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-200"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-4 bg-white text-gray-500">OR</span>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Contact</h2>
        <div class="space-y-4">
          <div>
            <input
              type="email"
              id="customer-email"
              class="input-field"
              value="ahmed.almansour@example.com"
              placeholder="Email"
            />
          </div>
          <label class="flex items-start gap-2 text-sm text-gray-700">
            <input type="checkbox" checked
                   class="mt-0.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span>Email me with news and offers</span>
          </label>
        </div>
      </div>

      <!-- Shipping Address -->
      <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Shipping address</h2>
        <div class="space-y-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <input
                type="text"
                id="customer-first-name"
                class="input-field"
                value="Ahmed"
                placeholder="First name"
              />
            </div>
            <div>
              <input
                type="text"
                id="customer-last-name"
                class="input-field"
                value="Al-Mansour"
                placeholder="Last name"
              />
            </div>
          </div>
          <div>
            <input
              type="text"
              id="address-street1"
              class="input-field"
              value="123 King Fahd Road"
              placeholder="Address"
            />
          </div>
          <div>
            <input
              type="text"
              id="address-street2"
              class="input-field"
              value="Apartment 4B"
              placeholder="Apartment, suite, etc. (optional)"
            />
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div>
              <input
                type="text"
                id="address-city"
                class="input-field"
                value="Riyadh"
                placeholder="City"
              />
            </div>
            <div>
              <input
                type="text"
                id="address-state"
                class="input-field"
                value="Riyadh"
                placeholder="State"
              />
            </div>
            <div class="sm:col-span-2 md:col-span-1">
              <input
                type="text"
                id="address-postcode"
                class="input-field"
                value="12345"
                placeholder="Postal code"
              />
            </div>
          </div>
          <div>
            <select id="address-country" class="input-field">
              <option value="SA">Saudi Arabia</option>
              <option value="AE">United Arab Emirates</option>
              <option value="KW">Kuwait</option>
            </select>
          </div>
          <div>
            <input
              type="tel"
              id="customer-phone"
              class="input-field"
              value="+966501234567"
              placeholder="Phone"
            />
          </div>
          <label class="flex items-start gap-2 text-sm text-gray-700">
            <input type="checkbox" class="mt-0.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span>Save this information for next time</span>
          </label>
        </div>
      </div>

      <!-- Shipping Method -->
      <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Shipping method</h2>
        <div class="border border-gray-300 rounded-md p-4 flex justify-between items-center bg-blue-50">
          <div class="flex items-center gap-3">
            <input type="radio" checked class="w-4 h-4 text-blue-600">
            <span class="text-gray-900 font-medium">Standard Shipping</span>
          </div>
          <span class="text-gray-900 font-medium">Free</span>
        </div>
      </div>

      <!-- Payment Method - Simple Toggle -->
      <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Payment</h2>
        <div class="text-xs text-gray-500 mb-3">All transactions are secure and encrypted.</div>

        <div class="space-y-0 border border-gray-300 rounded-md overflow-hidden">
          <!-- Bank Installments -->
          <div class="border-b border-gray-300">
            <label class="block p-4 cursor-pointer hover:bg-gray-50 transition-colors">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <input type="radio" name="payment" value="installment" checked
                         class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                  <span class="text-gray-900 font-medium">Bank Installments</span>
                </div>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full font-medium">Most Popular</span>
              </div>
            </label>
            <div id="details-installment" class="bg-gray-50 px-4 py-3 border-t border-gray-200">
              <div class="text-sm text-gray-700">
                <amwal-checkout-button
                  id="installment-checkout-btn"
                  amount="931.50"
                  country-code="SA"
                  locale="en"
                  label="Bank Installment"
                  only-show-bank-installment="true"
                  address-required="false"
                  class="w-full">
                </amwal-checkout-button>
              </div>
            </div>
          </div>

          <!-- Quick Checkout -->
          <div class="border-b border-gray-300">
            <label class="block p-4 cursor-pointer hover:bg-gray-50 transition-colors">
              <div class="flex items-center gap-3">
                <input type="radio" name="payment" value="quick"
                       class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                <span class="text-gray-900 font-medium">Quick Checkout</span>
              </div>
            </label>
            <div id="details-quick" class="bg-gray-50 px-4 py-3 border-t border-gray-200 hidden">
              <div class="text-sm text-gray-700">
                <amwal-checkout-button
                  id="quick-checkout-btn"
                  amount="931.50"
                  country-code="SA"
                  locale="en"
                  label="Pay Now"
                  address-required="true"
                  class="w-full">
                </amwal-checkout-button>
              </div>
            </div>
          </div>

          <!-- Apple Pay -->
          <div class="border-b border-gray-300">
            <label class="block p-4 cursor-pointer hover:bg-gray-50 transition-colors">
              <div class="flex items-center gap-3">
                <input type="radio" name="payment" value="apple"
                       class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                <span class="text-gray-900 font-medium">Apple Pay</span>
              </div>
            </label>
            <div id="details-apple" class="bg-gray-50 px-4 py-3 border-t border-gray-200 hidden">
              <div class="text-sm text-gray-700">
                <amwal-checkout-button
                  id="apple-checkout-btn"
                  amount="931.50"
                  country-code="SA"
                  locale="en"
                  label="Pay with Apple Pay"
                  address-required="false"
                  enable-apple-checkout="true"
                  class="w-full">
                </amwal-checkout-button>
              </div>
            </div>
          </div>

          <!-- Credit Card -->
          <div>
            <label class="block p-4 cursor-pointer hover:bg-gray-50 transition-colors">
              <div class="flex items-center gap-3">
                <input type="radio" name="payment" value="credit"
                       class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                <span class="text-gray-900 font-medium">Credit Card</span>
              </div>
            </label>
            <div id="details-credit" class="bg-gray-50 px-4 py-3 border-t border-gray-200 hidden">
              <div class="p-2 bg-blue-50 rounded text-xs text-blue-700 flex items-start gap-2 mb-3">
                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span><strong>Tip:</strong> Use Amwal above for instant checkout with no manual entry</span>
              </div>
              <div class="text-sm text-gray-700">
                <div class="space-y-3">
                  <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Card Number</label>
                    <input type="text" placeholder="Enter 16-digit card number manually" class="input-field text-sm">
                  </div>
                  <div class="grid grid-cols-2 gap-3">
                    <div>
                      <label class="block text-xs font-medium text-gray-700 mb-1">Expiry</label>
                      <input type="text" placeholder="MM/YY" class="input-field text-sm">
                    </div>
                    <div>
                      <label class="block text-xs font-medium text-gray-700 mb-1">CVC</label>
                      <input type="text" placeholder="3-4 digits" class="input-field text-sm">
                    </div>
                  </div>
                  <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Cardholder Name</label>
                    <input type="text" placeholder="Enter full name as on card" class="input-field text-sm">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-4 bg-blue-50 rounded-md p-4">
          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
            <div class="text-sm text-blue-900">
              <p class="font-medium mb-1">Your payment is secure</p>
              <p class="text-blue-700">We use bank-level encryption to protect your data.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Billing Address -->
      <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Billing address</h2>
        <label class="flex items-center gap-2 text-sm text-gray-700">
          <input type="radio" checked class="rounded-full border-gray-300 text-blue-600 focus:ring-blue-500">
          <span>Same as shipping address</span>
        </label>
      </div>

      <!-- Navigation Buttons -->
      <div class="flex items-center justify-between pt-4 border-t border-gray-200 mb-8">
        <a href="#" class="text-sm text-blue-600 hover:text-blue-700 flex items-center gap-1">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 19l-7-7 7-7"></path>
          </svg>
          Return to cart
        </a>
        <button class="bg-gray-400 text-white font-medium px-6 py-4 rounded-md w-full max-w-xs cursor-not-allowed flex items-center justify-center gap-2"
                id="complete-order-btn" disabled>
          <span>Complete order</span>
          <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full font-medium">Amwal above</span>
        </button>
      </div>

      <!-- Footer Links -->
      <div class="text-xs text-gray-500 space-y-2">
        <div class="flex items-center justify-center gap-4">
          <a href="#" class="hover:text-gray-700">Refund policy</a>
          <span>•</span>
          <a href="#" class="hover:text-gray-700">Privacy policy</a>
          <span>•</span>
          <a href="#" class="hover:text-gray-700">Terms of service</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Right Column - Order Summary -->
  <div class="order-summary-sidebar bg-gray-50 border-b lg:border-b-0 lg:border-l border-gray-200">
    <div class="max-w-xl mx-auto px-6 sm:px-8 lg:px-12 py-6 lg:py-10 lg:sticky lg:top-0">

      <!-- Product List -->
      <div class="space-y-4 mb-6">
        <div class="order-summary-item">
          <div class="relative">
            <div class="w-16 h-16 bg-white border border-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
              <img src="https://i0.wp.com/shop.amwal.tech/wp-content/uploads/2022/08/Amwal-Sticker.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <span class="badge-quantity" id="summary-quantity">1</span>
          </div>
          <div class="flex-1">
            <h3 class="text-sm font-medium text-gray-900" id="summary-product-name">Amwal Poster</h3>
            <p class="text-xs text-gray-600 mt-1">Size: 24" x 36"</p>
          </div>
          <div class="text-sm font-medium text-gray-900" id="summary-item-price">SAR 5,000.00</div>
        </div>
      </div>

      <!-- Discount Code -->
      <div class="mb-6">
        <div class="flex flex-col sm:flex-row gap-2">
          <input
            type="text"
            class="input-field flex-1"
            placeholder="Discount code or gift card"
          />
          <button class="px-6 py-3 border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 transition-all whitespace-nowrap">
            Apply
          </button>
        </div>
      </div>

      <!-- Price Summary -->
      <div class="space-y-3 pb-4 border-b border-gray-200 mb-4">
        <div class="flex justify-between text-sm">
          <span class="text-gray-600">Subtotal</span>
          <span class="text-gray-900" id="summary-subtotal">SAR 5,000.00</span>
        </div>
        <div class="flex justify-between text-sm">
          <span class="text-gray-600">Shipping</span>
          <span class="text-gray-900">Free</span>
        </div>
        <div class="flex justify-between text-sm">
          <span class="text-gray-600">Discount</span>
          <span class="text-green-600" id="summary-discount">-SAR 500.00</span>
        </div>
        <div class="flex justify-between text-sm">
          <span class="text-gray-600">Tax (VAT 15%)</span>
          <span class="text-gray-900" id="summary-tax">SAR 675.00</span>
        </div>
      </div>

      <!-- Total -->
      <div class="flex justify-between items-center mb-6">
        <span class="text-base font-semibold text-gray-900">Total</span>
        <div class="text-right">
          <div class="text-xs text-gray-500 mb-1">SAR</div>
          <div class="text-2xl font-bold text-gray-900" id="summary-total">5,175.00</div>
        </div>
      </div>

      <!-- Test Cards Section - For Development/Testing -->
      <div class="border border-amber-300 bg-amber-50 rounded-lg overflow-hidden">
        <button
          class="w-full px-3 py-2.5 flex items-center justify-between bg-amber-100 hover:bg-amber-200 transition-colors">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            <span class="text-sm font-semibold text-amber-900">Test Cards</span>
          </div>
        </button>

        <div id="test-cards-content" class="p-3">
          <p class="text-xs text-amber-800 mb-3">
            Use these test cards for development and testing only.
          </p>

          <!-- Pay in Full Cards -->
          <div class="mb-4">
            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center gap-2">
              <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
              Pay in Full
            </h3>
            <div class="overflow-x-auto">
              <table class="min-w-full bg-white border border-gray-300 text-xs">
                <thead class="bg-gray-100">
                <tr>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">Card Number</th>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">Exp</th>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">CCV</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">5454 5454 5454 5454</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">4000 0000 0000 0002</td>
                  <td class="px-2 py-1.5 text-gray-600">05/26</td>
                  <td class="px-2 py-1.5 text-gray-600">123</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">5453 0100 0009 5539</td>
                  <td class="px-2 py-1.5 text-gray-600">12/25</td>
                  <td class="px-2 py-1.5 text-gray-600">300</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">5200 0000 0000 0007</td>
                  <td class="px-2 py-1.5 text-gray-600">10/26</td>
                  <td class="px-2 py-1.5 text-gray-600">977</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">5123 4500 0000 0008</td>
                  <td class="px-2 py-1.5 text-gray-600">12/25</td>
                  <td class="px-2 py-1.5 text-gray-600">212</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">4464 0400 0000 0007</td>
                  <td class="px-2 py-1.5 text-gray-600">02/25</td>
                  <td class="px-2 py-1.5 text-gray-600">123</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">4111 1111 1111 1111</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Installment Cards -->
          <div>
            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center gap-2">
              <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
              Installment
            </h3>

            <div class="overflow-x-auto">
              <table class="min-w-full bg-white border border-gray-300 text-xs">
                <thead class="bg-gray-100">
                <tr>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">Card Number</th>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">Exp</th>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">CCV</th>
                  <th class="px-2 py-1.5 text-left font-semibold text-gray-700 border-b">Status</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">5454 5454 5454 5454</td>
                  <td class="px-2 py-1.5 text-gray-600">05/30</td>
                  <td class="px-2 py-1.5 text-gray-600">123</td>
                  <td class="px-2 py-1.5">
                                        <span class="inline-flex items-center gap-1 text-green-700 bg-green-50 px-2 py-0.5 rounded-full font-medium">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Success
                                        </span>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-2 py-1.5 font-mono text-gray-900">4173 2397 5386 4971</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                  <td class="px-2 py-1.5 text-gray-600">Any</td>
                  <td class="px-2 py-1.5">
                                        <span class="inline-flex items-center gap-1 text-red-700 bg-red-50 px-2 py-0.5 rounded-full font-medium">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            Auth Failure
                                        </span>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="mt-3 text-xs text-gray-600 bg-gray-50 p-2 rounded border border-gray-200">
            <p><strong>Tip:</strong> "Any" = use any valid value</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<!-- Environment Configuration Toolbar -->
<button id="env-toggle-btn" class="env-toggle-btn" title="Open Environment Settings">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
  </svg>
</button>

<div id="env-toolbar" class="env-toolbar collapsed" style="display: none;">
  <!-- Toolbar Header -->
  <div class="env-toolbar-header" id="env-toolbar-header">
    <div class="flex items-center gap-2">
      <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
      </svg>
      <h3 class="text-white font-semibold text-sm">Environment Settings</h3>
    </div>
    <button id="env-toolbar-close" class="text-white hover:text-gray-200 transition-colors">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <!-- Toolbar Content -->
  <div class="env-toolbar-content" id="env-toolbar-content">
    <!-- Current Environment Info -->
    <div class="mb-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm font-medium text-gray-700">Current Environment</span>
        <span id="toolbar-env-badge" class="env-badge sandbox text-xs">
                    Sandbox
                </span>
      </div>
      <div class="text-xs text-gray-600">
        <p><strong>Merchant ID:</strong></p>
        <code id="toolbar-merchant-id" class="block mt-1 text-xs bg-white px-2 py-1 rounded border border-gray-200">Loading...</code>
      </div>
    </div>

    <!-- Environment Selection -->
    <div class="env-form-group">
      <label class="env-label" for="env-select">Select Environment</label>
      <select id="env-select" class="env-select">
        <option value="sandbox">Sandbox (Testing)</option>
        <option value="production">Production (Live)</option>
        <option value="custom">Custom (Manual Config)</option>
      </select>
    </div>

    <!-- Custom Environment Fields (Hidden by default) -->
    <div id="custom-env-fields" style="display: none;">
      <div class="env-form-group">
        <label class="env-label" for="custom-merchant-id">
          Merchant ID
          <span class="text-red-500">*</span>
        </label>
        <input
          type="text"
          id="custom-merchant-id"
          class="env-input"
          placeholder="e.g., prod-amwal-abc123"
        >
      </div>

      <div class="env-form-group">
        <label class="env-label" for="custom-pay-url">
          Pay URL (Optional)
        </label>
        <input
          type="url"
          id="custom-pay-url"
          class="env-input"
          placeholder="https://pay.custom.domain"
        >
        <p class="text-xs text-gray-500 mt-1">Leave empty to use default</p>
      </div>

      <div class="env-form-group">
        <label class="env-label" for="custom-api-url">
          API URL (Optional)
        </label>
        <input
          type="url"
          id="custom-api-url"
          class="env-input"
          placeholder="https://api.custom.domain"
        >
        <p class="text-xs text-gray-500 mt-1">Leave empty to use default</p>
      </div>

      <div class="env-form-group">
        <label class="flex items-center gap-2 text-sm text-gray-700">
          <input type="checkbox" id="custom-debug" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
          <span>Enable Debug Mode</span>
        </label>
      </div>
    </div>

    <!-- Preset Environment Info -->
    <div id="preset-env-info" class="mb-4 p-3 bg-gray-50 rounded-lg border border-gray-200">
      <p class="text-xs text-gray-600 mb-2">
        <strong>Sandbox Environment:</strong>
      </p>
      <ul class="text-xs text-gray-600 space-y-1 ml-4 list-disc">
        <li>Test transactions only</li>
        <li>Use test cards provided</li>
        <li>No real money processed</li>
        <li>Debug mode enabled</li>
      </ul>
    </div>

    <!-- Action Buttons -->
    <div class="flex gap-2">
      <button id="env-apply-btn" class="env-btn env-btn-primary flex-1 flex items-center justify-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        Apply & Reload
      </button>
      <button id="env-reset-btn" class="env-btn env-btn-secondary">
        Reset
      </button>
    </div>

    <!-- Warning Message -->
    <div class="mt-4 p-3 bg-amber-50 rounded-lg border border-amber-200">
      <div class="flex items-start gap-2">
        <svg class="w-4 h-4 text-amber-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
        </svg>
        <p class="text-xs text-amber-800">
          <strong>Note:</strong> Changing environment will reload the page and apply new settings to all checkout buttons.
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  // ============================================
  // LOCAL STORAGE MANAGER
  // ============================================
  class StorageManager {
    constructor() {
      this.STORAGE_KEY = 'amwal_env_config';
    }

    save(config) {
      try {
        localStorage.setItem(this.STORAGE_KEY, JSON.stringify(config));
        console.log('✅ Configuration saved to localStorage:', config);
        return true;
      } catch (error) {
        console.error('❌ Failed to save to localStorage:', error);
        return false;
      }
    }

    load() {
      try {
        const stored = localStorage.getItem(this.STORAGE_KEY);
        if (stored) {
          const config = JSON.parse(stored);
          console.log('✅ Configuration loaded from localStorage:', config);
          return config;
        }
      } catch (error) {
        console.error('❌ Failed to load from localStorage:', error);
      }
      return null;
    }

    clear() {
      try {
        localStorage.removeItem(this.STORAGE_KEY);
        console.log('✅ Configuration cleared from localStorage');
        return true;
      } catch (error) {
        console.error('❌ Failed to clear localStorage:', error);
        return false;
      }
    }
  }

  // ============================================
  // ENVIRONMENT CONFIGURATION
  // ============================================
  const ENV_CONFIG = {
    // Storage manager instance
    storage: new StorageManager(),

    // Default environments
    DEFAULTS: {
      sandbox: {
        merchantId: 'sandbox-amwal-b87482f2-55da-486f-9ec5-e2ceb47a0333',
        payUrl: 'https://pay.sa.amwal.tech',
        apiUrl: 'https://backend.sa.amwal.tech',
        debug: true
      },
      production: {
        merchantId: 'prod-amwal-5563d261-8545-418b-b122-8767a2e59931',
        payUrl: 'https://pay.sa.amwal.tech',
        apiUrl: 'https://backend.sa.amwal.tech',
        debug: false
      },
      custom: {
        merchantId: 'sandbox-amwal-b87482f2-55da-486f-9ec5-e2ceb47a0333',
        payUrl: 'https://pay.amwal.dev',
        apiUrl: 'https://qa.amwal.dev',
        debug: true
      }
    },

    // Current environment: 'sandbox', 'production', or 'custom'
    CURRENT_ENV: 'sandbox',

    // Environment-specific settings
    ENVIRONMENTS: {},

    // Initialize from localStorage or defaults
    init() {
      const saved = this.storage.load();

      if (saved && saved.currentEnv && saved.environments) {
        // Load from localStorage
        this.CURRENT_ENV = saved.currentEnv;
        this.ENVIRONMENTS = saved.environments;
        console.log('📦 Loaded environment from localStorage');
      } else {
        // Use defaults
        this.CURRENT_ENV = 'sandbox';
        this.ENVIRONMENTS = JSON.parse(JSON.stringify(this.DEFAULTS));
        console.log('🆕 Using default environment configuration');
      }
    },

    // Get current environment settings
    get current() {
      return this.ENVIRONMENTS[this.CURRENT_ENV];
    },

    // Save current configuration to localStorage
    save() {
      const config = {
        currentEnv: this.CURRENT_ENV,
        environments: this.ENVIRONMENTS
      };
      return this.storage.save(config);
    },

    // Switch environment
    setEnvironment(env) {
      if (this.ENVIRONMENTS[env]) {
        this.CURRENT_ENV = env;
        this.save();
        console.log(`✅ Environment switched to: ${env}`, this.current);
        return true;
      }
      console.error(`❌ Invalid environment: ${env}`);
      return false;
    },

    // Update custom environment settings
    setCustom(merchantId, payUrl, apiUrl, debug = true) {
      this.ENVIRONMENTS.custom = {
        merchantId,
        payUrl: payUrl || this.DEFAULTS.custom.payUrl,
        apiUrl: apiUrl || this.DEFAULTS.custom.apiUrl,
        debug
      };
      this.CURRENT_ENV = 'custom';
      this.save();
      console.log('✅ Custom environment configured:', this.current);
    },

    // Reset to defaults
    reset() {
      this.CURRENT_ENV = 'sandbox';
      this.ENVIRONMENTS = JSON.parse(JSON.stringify(this.DEFAULTS));
      this.save();
      console.log('🔄 Reset to default configuration');
    },

    // Clear saved configuration
    clearSaved() {
      this.storage.clear();
      this.ENVIRONMENTS = JSON.parse(JSON.stringify(this.DEFAULTS));
      this.CURRENT_ENV = 'sandbox';
      console.log('🗑️ Cleared saved configuration');
    }
  };

  // Initialize ENV_CONFIG on load
  ENV_CONFIG.init();

  // Logger
  class Logger {
    info(message, data = null) {
      console.log(`[INFO] ${message}`, data || '');
    }

    warn(message, data = null) {
      console.warn(`[WARN] ${message}`, data || '');
    }

    error(message, data = null) {
      console.error(`[ERROR] ${message}`, data || '');
    }
  }


  // Product Module
  class ProductModule {
    constructor(logger) {
      this.logger = logger;
      this.productData = {
        name: 'Amwal Poster',
        baseAmount: 900,
        quantity: 1,
        discountPercent: 10,
        taxPercent: 15
      };
    }

    init() {
      this.updateDisplay();
      this.logger.info('Product module initialized');
    }

    getProductData() {
      const subtotal = this.productData.baseAmount * this.productData.quantity;
      const discountAmount = (subtotal * this.productData.discountPercent) / 100;
      const taxableAmount = subtotal - discountAmount;
      const taxAmount = (taxableAmount * this.productData.taxPercent) / 100;
      const total = taxableAmount + taxAmount;

      return {
        ...this.productData,
        subtotal,
        discountAmount,
        taxAmount,
        total
      };
    }

    calculateTotal() {
      const data = this.getProductData();
      return data.total;
    }

    updateDisplay() {
      const data = this.getProductData();

      document.getElementById('summary-product-name').textContent = data.name;
      document.getElementById('summary-quantity').textContent = data.quantity;
      document.getElementById('summary-item-price').textContent =
        `SAR ${data.baseAmount.toLocaleString('en-SA', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
      document.getElementById('summary-subtotal').textContent =
        `SAR ${data.subtotal.toLocaleString('en-SA', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
      document.getElementById('summary-discount').textContent =
        `-SAR ${data.discountAmount.toLocaleString('en-SA', {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2
        })}`;
      document.getElementById('summary-tax').textContent =
        `SAR ${data.taxAmount.toLocaleString('en-SA', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
      document.getElementById('summary-total').textContent =
        data.total.toLocaleString('en-SA', {minimumFractionDigits: 2, maximumFractionDigits: 2});

      document.dispatchEvent(new CustomEvent('product-updated', {detail: data}));
    }
  }

  // Checkout Module
  class CheckoutModule {
    constructor(logger, productModule) {
      this.logger = logger;
      this.productModule = productModule;
      this.checkoutButtons = [];
      this.completeOrderBtn = document.getElementById('complete-order-btn');
      this.orderDetails = null;
      this.paymentType = null;

      // Shipping methods state
      this.shippingMethods = [
        {
          "id": "1",
          "label": "Free shipping",
          "price": 0
        }
      ];
    }

    init() {
      this.logger.info('Checkout module initializing...');
      this.findAndConfigureButtons();
      this.setupPaymentToggle();
      this.setupEventListeners();
      this.updateEnvironmentUI();
    }

    findAndConfigureButtons() {
      // Find all amwal-checkout-button elements
      const buttons = document.querySelectorAll('amwal-checkout-button');
      this.checkoutButtons = Array.from(buttons);

      if (this.checkoutButtons.length === 0) {
        this.logger.error('No Amwal checkout buttons found');
        return;
      }

      this.logger.info(`Found ${this.checkoutButtons.length} checkout buttons`);

      // Configure each button with environment settings
      this.checkoutButtons.forEach((button, index) => {
        this.configureButton(button);
        this.setupAmwalEventListeners(button);
        this.logger.info(`Configured button ${index + 1}/${this.checkoutButtons.length}`);
      });

      this.applyDemoData();
    }

    configureButton(button) {
      const env = ENV_CONFIG.current;

      // Set merchant ID from environment
      button.setAttribute('merchant-id', env.merchantId);

      // Set debug mode
      button.setAttribute('debug', env.debug.toString());

      // Set pay-url if it's a custom environment
      if (ENV_CONFIG.CURRENT_ENV === 'custom' && env.payUrl) {
        button.setAttribute('pay-url', env.payUrl);
      }

      // Set api-url if it's a custom environment
      if (ENV_CONFIG.CURRENT_ENV === 'custom' && env.apiUrl) {
        button.setAttribute('api-url', env.apiUrl);
      }

      // Update amount for all buttons
      const total = this.productModule.calculateTotal();
      button.setAttribute('amount', total.toString());

      this.logger.info('Button configured with environment:', {
        merchantId: env.merchantId,
        payUrl: env.payUrl,
        apiUrl: env.apiUrl,
        debug: env.debug,
        amount: total
      });
    }

    updateEnvironmentUI() {
      const env = ENV_CONFIG.CURRENT_ENV;
      const envText = env.charAt(0).toUpperCase() + env.slice(1);

      // Update badges
      const badge = document.getElementById('env-badge');
      const badgeMobile = document.getElementById('env-badge-mobile');
      const envTextEl = document.getElementById('env-text');
      const envTextMobile = document.getElementById('env-text-mobile');

      if (badge && envTextEl) {
        badge.className = `env-badge ${env} inline-flex`;
        envTextEl.textContent = envText;
      }

      if (badgeMobile && envTextMobile) {
        badgeMobile.className = `env-badge ${env} inline-flex`;
        envTextMobile.textContent = `${envText} Mode`;
      }

      this.logger.info('Environment UI updated:', envText);
    }

    updateButtonTotal() {
      const total = this.productModule.calculateTotal();

      this.checkoutButtons.forEach(button => {
        button.setAttribute('amount', total.toString());
      });

      this.logger.info(`Updated checkout amount to: ${total}`);
    }

    // ============================================
    // AMWAL EVENT LISTENERS
    // ============================================

    setupAmwalEventListeners(button) {
      if (!button) {
        this.logger.error('Cannot setup Amwal events - button not found');
        return;
      }

      // 1. Address Update Event
      button.addEventListener('amwalAddressUpdate', (event) => {
        this.logger.info('🏠 Address updated:', event.detail);

        const addressData = event.detail;
        this.updateShippingMethods(addressData);
        button.setAttribute('shipping-methods', JSON.stringify(this.shippingMethods));

        setTimeout(() => {
          button.dispatchEvent(new CustomEvent('amwalAddressAck'));
          this.logger.info('✅ Address update acknowledged');
        }, 1000);
      });

      // 2. Country Selection Event
      button.addEventListener('amwalAddressCountryUpdate', (event) => {
        this.logger.info('🌍 Country selected:', event.detail);
        this.handleCountryChange(event.detail);
      });

      // 3. State Selection Event
      button.addEventListener('amwalAddressStateUpdate', (event) => {
        this.logger.info('🗺️ State selected:', event.detail);
        this.handleStateChange(event.detail);
      });

      // 4. Payment Success Event
      button.addEventListener('amwalCheckoutSuccess', (event) => {
        this.logger.info('🎉 Payment successful!', event.detail);
        const { orderId, transactionId } = event.detail;
        this.handlePaymentSuccess(orderId, transactionId);
        this.showToast('Payment completed successfully! Order ID: ' + orderId, 'success');
      });

      // 5. Modal Dismissed Event
      button.addEventListener('amwalDismissed', (event) => {
        this.logger.info('❌ Modal dismissed:', event.detail);
        const { success } = event.detail;
        if (!success) {
          this.showToast('Checkout was cancelled', 'error');
        }
      });

      // 6. Pre-Checkout Trigger Event
      button.addEventListener('amwalPreCheckoutTrigger', (event) => {
        this.logger.info('🔍 Pre-checkout triggered:', event.detail);
        const validationResult = this.validateBeforeCheckout();

        if (validationResult.isValid) {
          button.dispatchEvent(new CustomEvent('amwalPreCheckoutTriggerAck'));
          this.logger.info('✅ Pre-checkout validation passed');
        } else {
          button.dispatchEvent(new CustomEvent('amwalPreCheckoutTriggerError', {
            detail: { message: validationResult.error }
          }));
          this.showToast(validationResult.error, 'error');
        }
      });

      // 7. Pre-Pay Trigger Event
      button.addEventListener('amwalPrePayTrigger', (event) => {
        this.logger.info('💳 Pre-pay triggered:', event.detail);
        const finalValidation = this.validateBeforePayment();

        if (finalValidation.isValid) {
          button.dispatchEvent(new CustomEvent('amwalPrePayTriggerAck', {
            detail: { order_total_amount: this.productModule.calculateTotal() }
          }));
          this.logger.info('✅ Pre-pay validation passed');
        } else {
          button.dispatchEvent(new CustomEvent('amwalPrePayTriggerError', {
            detail: { message: finalValidation.error }
          }));
          this.showToast(finalValidation.error, 'error');
        }
      });

      // 8. Alternative Payment Success Event
      button.addEventListener('updateOrderOnPaymentsuccess', (event) => {
        this.logger.info('📦 Order updated on payment success:', event.detail);
        this.updateOrderAfterPayment(event.detail.orderId);
      });

      // Error handling event
      button.addEventListener('amwalCheckoutError', (event) => {
        this.logger.error('💥 Checkout error:', event.detail);
        this.showToast('An error occurred during checkout. Please try again.', 'error');
      });
    }

    // ============================================
    // HELPER METHODS FOR EVENT HANDLERS
    // ============================================

    updateShippingMethods(addressData) {
      const { city, country, state } = addressData;

      this.shippingMethods = [
        {
          "id": "1",
          "label": "Free shipping",
          "price": 0
        }
      ];

      if (country === 'SA' && (city === 'Riyadh' || city === 'Jeddah')) {
        this.shippingMethods.push({
          "id": "2",
          "label": "Express shipping (1-2 days)",
          "price": 50
        });
      }

      this.shippingMethods.push({
        "id": "3",
        "label": "Standard shipping (3-5 days)",
        "price": 20
      });

      this.logger.info('Updated shipping methods:', this.shippingMethods);
    }

    handleCountryChange(countryData) {
      const { country } = countryData;
      this.logger.info('Processing country change to:', country);
    }

    handleStateChange(stateData) {
      const { state, country } = stateData;
      this.logger.info('Processing state change to:', state, 'in country:', country);
    }

    handlePaymentSuccess(orderId, transactionId) {
      this.logger.info('Processing successful payment:', { orderId, transactionId });
    }

    updateOrderAfterPayment(orderId) {
      this.logger.info('Updating order after payment:', orderId);
    }

    validateBeforeCheckout() {
      const items = this.productModule.calculateTotal();

      if (items <= 0) {
        return {
          isValid: false,
          error: 'Cart is empty. Please add items before checkout.'
        };
      }

      return { isValid: true };
    }

    validateBeforePayment() {
      const items = this.productModule.calculateTotal();

      if (items <= 0) {
        return {
          isValid: false,
          error: 'Invalid cart total'
        };
      }

      return { isValid: true };
    }

    showToast(message, type = 'success') {
      const toast = document.createElement('div');
      toast.className = `toast ${type}`;
      toast.innerHTML = `
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                ${type === 'success'
        ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>'
        : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>'
      }
            </svg>
            <span class="font-medium">${message}</span>
        `;

      document.body.appendChild(toast);
      setTimeout(() => toast.classList.add('visible'), 100);

      setTimeout(() => {
        toast.classList.remove('visible');
        setTimeout(() => toast.remove(), 300);
      }, 5000);
    }

    setupPaymentToggle() {
      document.querySelectorAll('input[name="payment"]').forEach(radio => {
        radio.addEventListener('change', (e) => {
          document.querySelectorAll('[id^="details-"]').forEach(el => el.classList.add('hidden'));
          const details = document.getElementById(`details-${e.target.value}`);
          if (details) details.classList.remove('hidden');
        });
      });
    }

    setupEventListeners() {
      if (this.completeOrderBtn) {
        this.completeOrderBtn.addEventListener('click', () => {
          const btn = document.querySelector('amwal-checkout-button');
          if (btn) btn.click();
        });
      }

      // Listen for product updates to refresh button amounts
      document.addEventListener('product-updated', () => {
        this.updateButtonTotal();
      });
    }

    applyDemoData() {
      const mainButton = document.getElementById('express-checkout-btn');
      if (!mainButton) return;

      const shippingMethodsData = [
        {
          id: 'standard',
          label: 'Standard Shipping',
          price: 20,
        },
        {
          id: 'express',
          label: 'Express Shipping',
          price: 50,
        },
        {
          id: 'same-day',
          label: 'Same Day Delivery',
          price: 100,
        }
      ];

      const addressData = {
        initialFirstName: "Ahmed",
        initialLastName: "Al-Mansour",
        initialPhoneNumber: "+966501234567",
        initialEmail: "ahmed.almansour@example.com",
        initialAddress: JSON.stringify({
          street1: "123 King Fahd Road",
          street2: "Apartment 4B",
          city: "Riyadh",
          state: "Riyadh",
          country: "SA",
          postcode: "12345"
        }),
        allowedAddressCountries: JSON.stringify(["SA", "AE", "KW"]),
        allowedAddressStates: JSON.stringify({
          "SA": {
            "1115": "Riyadh",
            "1119": "Dammam",
            "1121": "Jeddah",
            "1122": "Mecca"
          },
          "AE": {
            "1108": "Abu Dhabi",
            "1111": "Dubai",
            "1114": "Sharjah"
          }
        }),
        allowedAddressCities: JSON.stringify({
          "SA": {
            "1115": ["Riyadh"],
            "1119": ["Dammam"]
          }
        }),
        shippingMethods: JSON.stringify(shippingMethodsData),
        postcodeOptionalCountries: JSON.stringify(["SA"])
      };

      Object.entries(addressData).forEach(([key, value]) => {
        const attrName = key.replace(/([A-Z])/g, '-$1').toLowerCase();
        mainButton.setAttribute(attrName, value);
      });

      this.logger.info('Demo data applied');
    }
  }


  // Environment Toolbar Module
  class EnvironmentToolbar {
    constructor(logger) {
      this.logger = logger;
      this.toolbar = document.getElementById('env-toolbar');
      this.toggleBtn = document.getElementById('env-toggle-btn');
      this.closeBtn = document.getElementById('env-toolbar-close');
      this.envSelect = document.getElementById('env-select');
      this.applyBtn = document.getElementById('env-apply-btn');
      this.resetBtn = document.getElementById('env-reset-btn');
      this.customFields = document.getElementById('custom-env-fields');
      this.presetInfo = document.getElementById('preset-env-info');
    }

    init() {
      this.setupEventListeners();
      this.updateToolbarDisplay();
      this.logger.info('Environment toolbar initialized');
    }

    setupEventListeners() {
      // Toggle toolbar open
      this.toggleBtn.addEventListener('click', () => {
        this.openToolbar();
      });

      // Close toolbar
      this.closeBtn.addEventListener('click', () => {
        this.closeToolbar();
      });

      // Environment selection change
      this.envSelect.addEventListener('change', () => {
        this.handleEnvironmentChange();
      });

      // Apply button
      this.applyBtn.addEventListener('click', () => {
        this.applyEnvironment();
      });

      // Reset button
      this.resetBtn.addEventListener('click', () => {
        this.resetToDefault();
      });

      // Close toolbar when clicking outside
      document.addEventListener('click', (e) => {
        if (this.toolbar.style.display !== 'none' &&
          !this.toolbar.contains(e.target) &&
          !this.toggleBtn.contains(e.target)) {
          this.closeToolbar();
        }
      });
    }

    openToolbar() {
      this.toolbar.style.display = 'block';
      this.toggleBtn.classList.add('toolbar-open');
      setTimeout(() => {
        this.toolbar.classList.remove('collapsed');
        this.toolbar.classList.add('expanded');
      }, 10);
      this.logger.info('Toolbar opened');
    }

    closeToolbar() {
      this.toolbar.classList.remove('expanded');
      this.toolbar.classList.add('collapsed');
      this.toggleBtn.classList.remove('toolbar-open');
      setTimeout(() => {
        this.toolbar.style.display = 'none';
      }, 300);
      this.logger.info('Toolbar closed');
    }

    handleEnvironmentChange() {
      const selectedEnv = this.envSelect.value;

      if (selectedEnv === 'custom') {
        this.customFields.style.display = 'block';
        this.presetInfo.style.display = 'none';

        // Pre-fill with current custom values
        const customEnv = ENV_CONFIG.ENVIRONMENTS.custom;
        document.getElementById('custom-merchant-id').value = customEnv.merchantId;
        document.getElementById('custom-pay-url').value = customEnv.payUrl;
        document.getElementById('custom-api-url').value = customEnv.apiUrl;
        document.getElementById('custom-debug').checked = customEnv.debug;
      } else {
        this.customFields.style.display = 'none';
        this.presetInfo.style.display = 'block';

        // Update preset info
        this.updatePresetInfo(selectedEnv);
      }
    }

    updatePresetInfo(env) {
      const info = {
        sandbox: {
          title: 'Sandbox Environment:',
          points: [
            'Test transactions only',
            'Use test cards provided',
            'No real money processed',
            'Debug mode enabled'
          ]
        },
        production: {
          title: 'Production Environment:',
          points: [
            'Live transactions',
            'Real payment processing',
            'Use actual payment cards',
            'Debug mode disabled'
          ]
        }
      };

      const envInfo = info[env] || info.sandbox;
      this.presetInfo.innerHTML = `
                <p class="text-xs text-gray-600 mb-2">
                    <strong>${envInfo.title}</strong>
                </p>
                <ul class="text-xs text-gray-600 space-y-1 ml-4 list-disc">
                    ${envInfo.points.map(point => `<li>${point}</li>`).join('')}
                </ul>
            `;
    }

    applyEnvironment() {
      const selectedEnv = this.envSelect.value;

      if (selectedEnv === 'custom') {
        const merchantId = document.getElementById('custom-merchant-id').value.trim();
        const payUrl = document.getElementById('custom-pay-url').value.trim();
        const apiUrl = document.getElementById('custom-api-url').value.trim();
        const debug = document.getElementById('custom-debug').checked;

        if (!merchantId) {
          alert('Please enter a Merchant ID for custom environment');
          return;
        }

        ENV_CONFIG.setCustom(merchantId, payUrl, apiUrl, debug);
        this.logger.info('Custom environment applied:', ENV_CONFIG.current);
      } else {
        ENV_CONFIG.setEnvironment(selectedEnv);
        this.logger.info(`Switched to ${selectedEnv} environment`);
      }

      // Show success message
      this.showSuccessMessage();

      // Reload the page to apply changes
      setTimeout(() => {
        location.reload();
      }, 1000);
    }

    resetToDefault() {
      if (confirm('Are you sure you want to reset to default sandbox environment? This will clear all saved settings.')) {
        ENV_CONFIG.reset();
        this.logger.info('Reset to default sandbox environment');

        // Show success message
        this.showSuccessMessage('Settings reset to default');

        setTimeout(() => {
          location.reload();
        }, 1000);
      }
    }

    showSuccessMessage(message = 'Settings saved successfully') {
      const toast = document.createElement('div');
      toast.className = 'toast success visible';
      toast.innerHTML = `
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span class="font-medium">${message}</span>
      `;
      document.body.appendChild(toast);

      setTimeout(() => {
        toast.classList.remove('visible');
        setTimeout(() => toast.remove(), 300);
      }, 2000);
    }

    updateToolbarDisplay() {
      // Update current environment display
      const currentEnv = ENV_CONFIG.CURRENT_ENV;
      const envBadge = document.getElementById('toolbar-env-badge');
      const merchantId = document.getElementById('toolbar-merchant-id');

      // Update badge
      if (envBadge) {
        envBadge.className = `env-badge ${currentEnv} text-xs`;
        envBadge.textContent = currentEnv.charAt(0).toUpperCase() + currentEnv.slice(1);
      }

      // Update merchant ID
      if (merchantId) {
        merchantId.textContent = ENV_CONFIG.current.merchantId;
      }

      // Set select value
      this.envSelect.value = currentEnv;

      // Show/hide custom fields based on current environment
      if (currentEnv === 'custom') {
        this.customFields.style.display = 'block';
        this.presetInfo.style.display = 'none';

        // Fill custom fields with current values
        const customEnv = ENV_CONFIG.current;
        document.getElementById('custom-merchant-id').value = customEnv.merchantId;
        document.getElementById('custom-pay-url').value = customEnv.payUrl;
        document.getElementById('custom-api-url').value = customEnv.apiUrl;
        document.getElementById('custom-debug').checked = customEnv.debug;
      } else {
        this.customFields.style.display = 'none';
        this.presetInfo.style.display = 'block';
        this.updatePresetInfo(currentEnv);
      }

      this.logger.info('Toolbar display updated');
    }
  }

  // Main App
  class AmwalCheckoutApp {
    constructor() {
      this.logger = new Logger();
      this.productModule = new ProductModule(this.logger);
      this.checkoutModule = new CheckoutModule(this.logger, this.productModule);
      this.environmentToolbar = new EnvironmentToolbar(this.logger);
    }

    init() {
      // Log environment configuration
      this.logger.info('🌍 Environment Configuration:', {
        current: ENV_CONFIG.CURRENT_ENV,
        settings: ENV_CONFIG.current,
        savedInLocalStorage: ENV_CONFIG.storage.load() !== null
      });

      this.productModule.init();
      this.checkoutModule.init();
      this.environmentToolbar.init();
      this.setupMobileMenu();
      this.logger.info('✅ Amwal checkout app initialized');
    }

    setupMobileMenu() {
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');

      if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');

          const icon = mobileMenuButton.querySelector('svg');
          if (mobileMenu.classList.contains('hidden')) {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
          } else {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
          }
        });

        document.addEventListener('click', (e) => {
          if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuButton.querySelector('svg');
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
          }
        });
      }
    }
  }

  // Initialize
  document.addEventListener('DOMContentLoaded', () => {
    const app = new AmwalCheckoutApp();
    app.init();
  });
</script>
</body>
</html>
