=== Monero Payments for WooCommerce ===
Contributors: idealmsp
Tags: woocommerce, monero, xmr, cryptocurrency, payments
Requires at least: 6.4
Tested up to: 6.9.4
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A maintained fork of the original Monero WooCommerce Gateway. Adds support for modern WooCommerce versions, including Cart & Checkout Blocks, and fixes long-standing compatibility issues.

== Description ==

Monero Payments for WooCommerce allows your store to accept **Monero (XMR)** payments directly, without intermediaries.

This plugin is a maintained fork of the original Monero WooCommerce Gateway (MIT licensed). This distribution is provided under GPLv2 or later for WordPress compatibility while preserving original attribution.

= Key Features =
* Accept Monero (XMR) payments directly to your wallet
* Supports both:
  * `monero-wallet-rpc` (recommended)
  * Viewkey + blockchain explorer validation
* Compatible with:
  * Classic checkout
  * Cart & Checkout Blocks
  * High-Performance Order Storage (HPOS)
* AJAX-based order status updates
* Cron-based payment verification (no page refresh required)
* Supports partial and multiple payments per order
* Configurable confirmations (0–60 blocks)
* Exchange rate locking at checkout
* Admin tools to track payments and link to explorers
* Optional store-wide price display in XMR
* Shortcodes for price display and badges

= What's New in This Fork =
* WooCommerce 8+ compatibility
* Checkout Blocks support
* Fixed gateway visibility issues
* Updated payment handling for modern WooCommerce
* Ongoing maintenance and support

⚠️ Disclaimer:  
This plugin facilitates cryptocurrency payments. Users are responsible for complying with all applicable laws and regulations in their jurisdiction.

== Installation ==

= Manual Installation =
1. Upload the plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **WooCommerce → Settings → Payments**
4. Enable **Monero Payments**
5. Configure your wallet settings

= Recommended =
For reliable payment verification, configure a real cron job instead of WP-Cron:
`* * * * * wget -q -O - https://yourstore.com/wp-cron.php?doing_wp_cron >/dev/null 2>&1`

== Frequently Asked Questions ==

= Does this plugin support subscriptions? =
No. Monero does not support automatic recurring payments. Subscriptions must be handled manually (invoice-style renewals).

= Which validation method should I use? =
Use `monero-wallet-rpc` for maximum privacy and security. The viewkey method is easier but relies on a third-party explorer.

= Is this plugin custodial? =
No. Payments go directly to your wallet. No third party holds funds.

= Does this work with WooCommerce Blocks checkout? =
Yes. This fork adds support for Cart & Checkout Blocks.

= Can I use this on testnet? =
Yes. Enable the Testnet option in settings.

== Screenshots ==

1. Checkout page with Monero payment option
2. Payment instructions with QR code
3. Admin order view with payment tracking
4. Settings page configuration

== Changelog ==

= 1.0.0 =
* Initial release of maintained fork
* Added WooCommerce 8+ compatibility
* Added Cart & Checkout Blocks support
* Fixed gateway not appearing at checkout
* Updated order/payment handling
* Improved compatibility with HPOS

== Upgrade Notice ==

= 1.0.0 =
This is a maintained fork replacing the original plugin for modern WooCommerce compatibility.

== Credits ==

Original plugin by mosu-forge and SerHack  
Additional contributions by Monero Integrations and Ryo Currency Project  

Updated by Ideal Managed Solutions

== License ==

This plugin is a maintained fork of software originally released under the MIT License.

Original work:
MIT License (see LICENSE file)

This distribution:
GPLv2 or later for WordPress compatibility

== Donations ==

If you find this plugin useful, consider supporting development.

Maintained Fork (Ideal Managed Solutions):
47rBGAMwNEuFK2pMVwSFUzazgTTyJRsNUYZRuK6fWuJ6LTcoYFnGMcU3w51m69Rp5yQKrcGPv5gWkQUdqMVrFRA7RJLXjs7

Original Authors:
monero-integrations:
44krVcL6TPkANjpFwS2GWvg1kJhTrN7y9heVeQiDJ3rP8iGbCd5GeA4f3c2NKYHC1R4mCgnW7dsUUUae2m9GiNBGT4T8s2X

ryo-currency:
4A6BQp7do5MTxpCguq1kAS27yMLpbHcf89Ha2a8Shayt2vXkCr6QRpAXr1gLYRV5esfzoK3vLJTm5bDWk5gKmNrT6s6xZep

