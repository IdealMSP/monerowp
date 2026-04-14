# Monero Payments for WooCommerce

A maintained fork of the original Monero WooCommerce Gateway, updated for modern WooCommerce compatibility, including support for Cart & Checkout Blocks.

This plugin enables WooCommerce stores to accept **Monero (XMR)** payments directly, without intermediaries.

⚠️ **Legal Notice:**  
This plugin provides tools for accepting cryptocurrency payments. Users are responsible for complying with all applicable laws and regulations in their jurisdiction.

## 🔧 What's New in This Fork

- ✅ Compatibility with WooCommerce 8+
- ✅ Support for Cart & Checkout Blocks
- ✅ Modernized WooCommerce gateway integration
- ✅ Bug fixes for checkout and order handling
- ✅ Ongoing maintenance and updates

## 🚀 Features

- Payment validation via:
  - `monero-wallet-rpc` (recommended)
  - Blockchain explorer (viewkey method)
- Cron-based payment verification (no need to keep page open)
- AJAX-based order status updates
- Support for partial and multiple payments
- Configurable confirmations (0–60 blocks)
- Live exchange rate locking at checkout
- Integration with:
  - Order emails
  - Order confirmation page
  - Customer account pages
  - Admin order view
- Payment tracking with explorer links
- Optional display of prices in Monero
- Shortcodes for exchange rates and badges

## 📦 Requirements

- A Monero wallet:
  - GUI Wallet: https://github.com/monero-project/monero-gui/releases
  - CLI Wallet: https://github.com/monero-project/monero/releases
  - Paper Wallet: https://moneroaddress.org/
- PHP extension: BCMath

## 🛠 Installation

### Manual Installation (Recommended)

1. Download this repository or latest release  
2. Upload the plugin folder to:  
   `wp-content/plugins/`  
3. Activate the plugin in WordPress Admin  
4. Configure under:  
   **WooCommerce → Settings → Payments → Monero**

## ⚙️ Configuration

### Option 1 — Viewkey Method (Easiest)

Requires:
- Monero wallet address
- Secret viewkey

⚠️ Note:  
Your viewkey is sent over HTTPS to a blockchain explorer for validation.  
For maximum privacy, use the RPC method instead.

### Option 2 — `monero-wallet-rpc` (Recommended)

Requires:
- Server access
- Monero binaries

Run:
- `monerod`
- `monero-wallet-rpc`

Optional:
- Use a remote node instead of local daemon

🔐 **Security Tip:**  
Use a **view-only wallet** to avoid exposing spend keys.

## 🧩 WooCommerce Compatibility

| Feature | Supported |
|--------|----------|
| Classic Checkout | ✅ |
| Block Checkout | ✅ |
| HPOS | ✅ |

## 📊 Shortcodes

### Live Price
[monero-price]
[monero-price currency="USD"]

### Monero Accepted Badge
[monero-accepted-here]

## ❤️ Donations

If you find this plugin useful, consider supporting development:

### Maintained Fork (Ideal Managed Solutions)
- idealmsp:
  47rBGAMwNEuFK2pMVwSFUzazgTTyJRsNUYZRuK6fWuJ6LTcoYFnGMcU3w51m69Rp5yQKrcGPv5gWkQUdqMVrFRA7RJLXjs7
  
### Original Authors
- monero-integrations:  
  44krVcL6TPkANjpFwS2GWvg1kJhTrN7y9heVeQiDJ3rP8iGbCd5GeA4f3c2NKYHC1R4mCgnW7dsUUUae2m9GiNBGT4T8s2X
- ryo-currency:  
  4A6BQp7do5MTxpCguq1kAS27yMLpbHcf89Ha2a8Shayt2vXkCr6QRpAXr1gLYRV5esfzoK3vLJTm5bDWk5gKmNrT6s6xZep

## 📜 License

This project is a maintained fork of software originally released under the MIT License.

- Original code: MIT License  
- This distribution: GPLv2 or later (for WordPress compatibility)  

See the LICENSE file for full details.


## 🙏 Credits

- Original plugin by **mosu-forge & SerHack**
- Additional contributions by **Monero Integrations** and **Ryo Currency Project**
- Maintained and updated by **Ideal Managed Solutions**


## ⚠️ Disclaimer

This plugin is provided "as is", without warranty of any kind.  
Use at your own risk.

Cryptocurrency payments are irreversible. Ensure proper configuration before accepting payments.
