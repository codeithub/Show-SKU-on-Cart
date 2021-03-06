/**
 * @snippet       Show SKU @ WooCommerce Cart
 * @author        codeithub
*/
 
add_action( 'woocommerce_after_cart_item_name', 'codeithub_sku_below_cart_item_name', 11, 2 );
 
function codeithub_sku_below_cart_item_name( $cart_item, $cart_item_key ) {
   $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
   $sku = $_product->get_sku();
   if ( ! $sku ) return;
   echo '<p><small>SKU: ' . $sku . '</small></p>';
}
