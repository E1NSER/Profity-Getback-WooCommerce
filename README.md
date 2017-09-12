# Profity-Getback-WooCommerce
Getback and Profity integration for WooCommerce

The snippet has to be placed in **YOUR-THEME/woocommerce/checkout/thankyou.php** after this code:
<pre>do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() );</pre> at line 73
