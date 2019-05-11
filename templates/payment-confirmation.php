<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 4/28/2019
 * Time: 11:44 AM
 *
 * @package Masjid/Components
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="mt-4">
	<p><?php echo __( 'Once you finished the transfer, you must make a confirmation below.', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
	<button type="button" class="btn btn-primary btn-block btn-lg ext-uppercase btn-go-conf">
		<?php echo __( 'I Have Completed The Transfer', 'masjid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</button>
</div>
