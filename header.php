<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
 <style>
      .wpcf7-response-output {
       
       float: left !important;
       width: 100% !important;
       
   }
   
   .btn-park  {
       background: #0055B8 !important;
   }
 </style>

  <script src="https://cdn.twind.style" crossorigin></script>
  <script>
    twind.install({
      hash: false,
      theme: {
        extend: {
          colors: {
            'park': { 'blue': '#0033A1', 'blue-light': '#0055b8', 'bg': '#f6f6fb', 'gray': '#99999b', 'border': '#e0e0e0', 'star': '#FFB800' }
          },
          fontFamily: { 'figtree': ['Figtree', 'sans-serif'] }
        }
      }
    });
  </script>

  <link rel="icon" type="image/png" href="https://www.parkbusinesscapital.com/wp-content/uploads/2026/03/favicon.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class('font-figtree'); ?>>

<!-- SVG SPRITE -->
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-hamburger" viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
  <symbol id="icon-close" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
  <symbol id="icon-arrow" viewBox="0 0 16 12"><path d="M1 6h13M10 1l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-sm" viewBox="0 0 14 10"><path d="M1 5h11M9 1l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-chevron" viewBox="0 0 12 8"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-check-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#0055B8" stroke-width="2" fill="none"/><path d="M8 12l3 3 5-6" stroke="#0055B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-left" viewBox="0 0 20 20"><path d="M13 4l-6 6 6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-right-nav" viewBox="0 0 20 20"><path d="M7 4l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
</svg>

<!-- NAV -->
<nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 h-[70px] flex items-center justify-between">
    <a href="<?php echo home_url(); ?>" class="flex items-center gap-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Park Logo" class="h-11 w-auto" />
    </a>

    <div class="hidden lg:flex items-center gap-10">
      <a href="<?php echo home_url(); ?>" class="nav-link text-[17px] text-black hover:text-park-blue transition-colors">Home</a>
      <a href="<?php echo home_url('/contact'); ?>" class="nav-link text-[17px] text-black hover:text-park-blue transition-colors">Contact</a>
      <a href="<?php echo home_url('/application'); ?>" class="nav-link text-[17px] text-black hover:text-park-blue transition-colors">Apply</a>
      <a href="<?php echo home_url('/partners'); ?>" class="nav-link text-[17px] text-black hover:text-park-blue transition-colors">Partners</a>
    </div>

    <a href="<?php echo home_url('/application'); ?>" class="hidden lg:flex btn-park bg-park-blue text-white font-semibold text-lg px-10 py-2">Let's start</a>

    <button id="menuToggle" class="lg:hidden text-black p-2">
      <svg class="w-6 h-6"><use href="#icon-hamburger"/></svg>
    </button>
  </div>
</nav>


<!-- Mobile Menu -->
<div id="menuOverlay" class="mobile-menu-overlay fixed inset-0 bg-black/50 z-[60]"></div>
<div id="mobileMenu" class="mobile-menu fixed top-0 right-0 w-[300px] h-full bg-white z-[70] shadow-2xl flex flex-col">
  <div class="flex justify-between items-center p-5 border-b border-gray-100">
    <a href="index.html" class="flex items-center gap-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Park Logo" class="h-9 w-auto" />
    </a>
    <button id="menuClose" class="p-2 hover:bg-gray-100 rounded-lg transition-colors"><svg class="w-6 h-6"><use href="#icon-close"/></svg></button>
  </div>
  <div class="flex-1 overflow-y-auto py-4">
   <a href="<?php echo home_url(); ?>" class="mobile-nav-link">Home</a>
      <a href="<?php echo home_url('/contact'); ?>" class="mobile-nav-link">Contact</a>
      <a href="<?php echo home_url('/application'); ?>" class="mobile-nav-link">Apply</a>
      <a href="<?php echo home_url('/partners'); ?>" class="mobile-nav-link">Partners</a>
  </div>
  <div class="p-5 border-t border-gray-100">
    <a href="<?php echo home_url('/application'); ?>" class="btn-park bg-park-blue text-white font-semibold text-lg py-3 px-10 w-full text-center block">Let's start</a>
  </div>
</div>