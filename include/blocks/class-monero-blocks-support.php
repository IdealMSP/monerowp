<?php

defined( 'ABSPATH' ) || exit;

use Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType;

final class Monero_Gateway_Blocks_Support extends AbstractPaymentMethodType {
    protected $name = 'monero_gateway';
    protected $gateway;
    protected $settings = [];

    public function initialize() {
        $this->settings = get_option( 'woocommerce_monero_gateway_settings', [] );
        if ( class_exists( 'Monero_Gateway' ) ) {
            $this->gateway = new Monero_Gateway( false );
        }
    }

    public function is_active() {
        return isset( $this->settings['enabled'] ) && 'yes' === $this->settings['enabled'];
    }

    public function get_payment_method_script_handles() {
        $handle = 'monero-gateway-blocks';
        $src    = MONERO_GATEWAY_PLUGIN_URL . 'assets/js/monero-gateway-blocks.js';
        $deps   = array( 'wc-blocks-registry', 'wc-settings', 'wp-element', 'wp-html-entities' );
        $ver    = defined( 'WC_VERSION' ) ? WC_VERSION : '1.0.0';

        wp_register_script( $handle, $src, $deps, $ver, true );
        return array( $handle );
    }

    public function get_payment_method_script_handles_for_admin() {
        return $this->get_payment_method_script_handles();
    }

    public function get_supported_features() {
        if ( $this->gateway && isset( $this->gateway->supports ) && is_array( $this->gateway->supports ) ) {
            return $this->gateway->supports;
        }
        return array( 'products' );
    }

    public function get_payment_method_data() {
        return array(
            'title'       => isset( $this->settings['title'] ) ? $this->settings['title'] : __( 'Monero Crypto', 'monero_gateway' ),
            'description' => isset( $this->settings['description'] ) ? $this->settings['description'] : __( 'Pay securely using Monero. You will be provided payment details after checkout.', 'monero_gateway' ),
            'supports'    => $this->get_supported_features(),
        );
    }
}
