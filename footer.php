<footer class="border-t border-park-border">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="flex flex-col lg:flex-row items-start gap-8 lg:justify-between">
      <div class="flex-shrink-0">
        <a href="<?php echo home_url(); ?>" class="flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Park Business Capital" class="h-12 w-auto object-contain" />
        </a>
      </div>

      <div class="flex flex-col sm:flex-row gap-16 lg:w-[72%]">
        <div>
          <h4 class="text-sm font-semibold text-black mb-3">Ready to Apply</h4>
          <ul>
            <li class="text-sm text-black leading-7">
              <a href="<?php echo home_url('/application'); ?>">Application</a>
            </li>
          </ul>
        </div>

        <div>
          <h4 class="text-sm font-semibold text-black mb-3">Contact Us</h4>
          <div class="flex flex-col gap-3">
            <p class="text-sm text-black">305-209-2818</p>
            <p class="text-sm text-black">info@parkbusinesscapital.com</p>
            <p class="text-sm text-black">2125 Biscayne Blvd Miami, FL 33137</p>
          </div>
        </div>

        <div>
          <ul>
            <li class="text-sm text-black leading-7">
              <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="text-sm text-black leading-7">
              <a href="<?php echo home_url('/contact'); ?>">Contact</a>
            </li>
            <li class="text-sm text-black leading-7">
              <a href="<?php echo home_url('/application'); ?>">Application</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-xs text-gray-400">&copy; <?php echo date('Y'); ?> Park Business Capital. All rights reserved.</p>
      <div>
        <a href="<?php echo home_url('/privacy-policy'); ?>" class="text-xs text-gray-400 hover:text-park-blue">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>