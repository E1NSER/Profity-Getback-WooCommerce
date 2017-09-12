<!-- Getback -->
<script async src="https://www.getback.ch/app/tracking/GETBACK-ID"></script>

<!-- Profity -->
<?php
	$order_id     = $order->get_order_number();
	$order_value  = $order->order_total;
	$coupons      = $order->get_used_coupons();
	if( isset($coupons) ): foreach( $coupons as $coupon ): $voucher = $coupon; break; endforeach; endif;
?>
<img src="https://www.profity.ch/imp/?s=PROFITY_ID&amp;b=6&amp;lp=1&amp;ordervalue=<?= $order_value ?>&amp;ordernumber=<?= $order_id ?><?php if( isset($voucher) ): ?>&amp;vouchercode=<?= $voucher; ?><?php endif; ?>">
