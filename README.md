# Mythic Books — WooCommerce Store

Online bookstore built with WordPress and WooCommerce as part of a web development portfolio.

## Stack

- WordPress 6.x
- WooCommerce 10.x
- Elementor (free)
- Astra + custom child theme

## Features

- 10 products across 3 categories (Medieval Fiction, Space Opera, History)
- Product catalog with cover images and descriptions
- Real-time cart counter in navigation
- Free shipping automatically applied above 30€
- Full checkout and order management flow
- Custom CSS for consistent product card heights
- Child theme with PHP customizations

## Local Environment

Built and run locally using **Local** (by WP Engine), which handles the WordPress +
MySQL + PHP stack in a self-contained app rather than requiring a manually configured
XAMPP/Docker setup.

## Customizations

All custom code lives in `src/functions.php` and `src/style.css`.

## Technical challenges

### Theme compatibility: Moontopia → Astra
Started with Moontopia theme but its sections were locked and could not be edited in Elementor — clicking elements did not expose editable fields in the panel, and right-click context menus were browser-native only. Switched to Astra, which has full Elementor compatibility and an active open-source ecosystem.

### WooCommerce block-based cart

WooCommerce 8.3+ uses a block-based cart instead of the classic shortcode. Legacy PHP hooks like `woocommerce_before_cart` and `woocommerce_before_cart_table` do not fire in this context. Diagnosed by inspecting the cart page's raw `post_content` via WP-CLI (`wp post get 39 --field=post_content`), which confirmed the page used `<!-- wp:woocommerce/cart -->` blocks. Solved by adding a static notice directly in the cart page block editor.

### Flat rate not hiding when free shipping applies

WooCommerce shows all available shipping methods simultaneously, leaving the customer to choose manually even when free shipping is available. Added a `woocommerce_package_rates` filter in the child theme to automatically remove flat rate from the options whenever free shipping is applicable. Shipping recalculation only triggers once a delivery address is entered at checkout — this is standard WooCommerce block behaviour, not a bug.

### Cart counter in navigation

Elementor Pro's Menu Cart widget requires a paid plan. Solved by adding a custom `wp_nav_menu_items` filter in the child theme's `functions.php` that appends a cart link with a live item count to the navigation menu.

### Product card alignment

Products with longer titles caused inconsistent card heights and misaligned "Add to cart" buttons. Solved with a `min-height` rule on the product title element via Additional CSS in the WordPress Customizer.

### Child theme setup
Custom PHP cannot be added directly to Astra's `functions.php` as changes are overwritten on theme updates. Created a child theme using WP-CLI (`wp scaffold child-theme`) to safely contain all PHP and CSS customizations.

## Screenshots

See `/screenshots` folder.