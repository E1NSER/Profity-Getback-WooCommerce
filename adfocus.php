<!-- Getback -->
<script async src="https://www.getback.ch/app/tracking/GETBACK-ID"></script>

<!-- Profity -->
<?php
	$order_id     = $order->get_order_number();
	$order_value  = $order->order_total;
	$coupons      = $order->get_used_coupons();
	if( isset($coupons) ): foreach( $coupons as $coupon ): $voucher = $coupon; break; endforeach; endif;
?>
<img src="https://www.profity.ch/imp/?s=PROFITY_ID&b=6&lp=1&ordervalue=<?= $order_value ?>&ordernumber=<?= $order_id ?><?php if( isset($voucher) ): ?>&vouchercode=<?= $voucher; ?><?php endif; ?>">
