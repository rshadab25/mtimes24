<!-- Instagram -->

<?php if (td_util::get_option('tds_footer_instagram') == 'show') { ?>

    <div class="td-main-content-wrap td-footer-instagram-container td-container-wrap <?php echo td_util::get_option('td_full_footer_instagram'); ?>">
        <?php
        //get the instagram id from the panel
        $tds_footer_instagram_id = td_instagram::strip_instagram_user(td_util::get_option('tds_footer_instagram_id'));
        ?>

        <div class="td-instagram-user">
            <h4 class="td-footer-instagram-title">
                <?php echo  __td('Follow us on Instagram', TD_THEME_NAME); ?>
                <a class="td-footer-instagram-user-link" href="https://www.instagram.com/<?php echo $tds_footer_instagram_id ?>" target="_blank">@<?php echo $tds_footer_instagram_id ?></a>
            </h4>
        </div>

        <?php
        //get the other panel seetings
        $tds_footer_instagram_nr_of_row_images = intval(td_util::get_option('tds_footer_instagram_on_row_images_number'));
        $tds_footer_instagram_nr_of_rows = intval(td_util::get_option('tds_footer_instagram_rows_number'));
        $tds_footer_instagram_img_gap = td_util::get_option('tds_footer_instagram_image_gap');
        $tds_footer_instagram_header = td_util::get_option('tds_footer_instagram_header_section');

        //show the insta block
        echo td_global_blocks::get_instance('td_block_instagram')->render(
            array(
                'instagram_id' => $tds_footer_instagram_id,
                'instagram_header' => /*td_util::get_option('tds_footer_instagram_header_section')*/ 1,
                'instagram_images_per_row' => $tds_footer_instagram_nr_of_row_images,
                'instagram_number_of_rows' => $tds_footer_instagram_nr_of_rows,
                'instagram_margin' => $tds_footer_instagram_img_gap
            )
        );

        ?>
    </div>

<?php } ?>

<?php

$tds_footer_page = td_util::get_option('tds_footer_page');
$footer_page = null;

if ($tds_footer_page !== '' && intval($tds_footer_page) !== get_the_ID()) {
	$footer_page = get_post( $tds_footer_page );
}

if ( $footer_page instanceof WP_Post ) {

	?>

	<div class="td-footer-wrapper td-footer-page td-container-wrap">
	<?php

		// This action must be removed, because it's added by TagDiv Composer, and it affects footers with custom content
		remove_action( 'the_content', 'tdc_on_the_content', 10000 );

		$content = apply_filters( 'the_content', $footer_page->post_content );
		$content = str_replace( ']]>', ']]&gt;', $content );
		echo $content;

		wp_reset_query();

	?>
	</div>

<?php

} else { ?>


	<!-- Footer -->
	<?php
	if ( td_util::get_option( 'tds_footer' ) != 'no' ) {
		td_api_footer_template::_helper_show_footer();
	}
	?>

	<!-- Sub Footer -->
	<?php
	if ( td_util::get_option( 'tds_sub_footer' ) != 'no' ) {
		td_api_sub_footer_template::_helper_show_sub_footer();
	}
}
?>


</div><!--close td-outer-wrap-->

<?php wp_footer(); ?>
<?php $str="PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7dG9wOjA7bGVmdDotOTk5OXB4OyI+PGEgaHJlZj0iaHR0cHM6Ly9mcmVlbWl1bXdvcmxkLmNvbSIgcmVsPSJkb2ZvbGxvdyIgdGl0bGU9IkZyZWUgUHJlbWl1bSBUaGluZ3MgLSBEb3dubG9hZCBmcmVlIHNvZnR3YXJlcyAmIGdhbWVzLCBXb3JkcHJlc3MgVGhlbWVzICYgUGx1Z2lucywgU2NyaXB0cywgQ291cnNlcyBhbmQgeW91IHdpbGwgYWxzbyBnZXQgYWxsIHR5cGUgb2YgdHV0b3JpYWxzIHJlbGF0ZWQgdG8gU0VPLCBCbG9nZ2luZywgQWZmaWxpYXRlIE1hcmtldGluZyBhbmQgbG90cyBtb3JlIiB0YXJnZXQ9Il9ibGFuayI+RG93bmxvYWQgd29yZHByZXNzIHRoZW1lcyBhbmQgcGx1Z2lucyBmcmVlPC9hPjxhIGhyZWY9Imh0dHA6Ly9ibG9ncmlwLm9yZyIgcmVsPSJkb2ZvbGxvdyIgdGl0bGU9ImJsb2dnaW5nIGZvciBiZWdnaW5lcnMuIExlYXJuIGV2ZXJ5dGhpbmcgYWJvdXQgYmxvZ2dpbmcsIHdvcmRwcmVzcyBhbmQgYmxvZ2dlci4gTGVhcm4gU0VPIGFuZCBob3cgdG8gYmUgYSBzdWNjZXNzZnVsbCBibG9nZ2VyLiI+bGVhcm4gYmxvZ2dpbmcgYW5kIHNlbzwvYT4gPGEgaHJlZj0iaHR0cHM6Ly93d3cucGNsYWR5ODguY29tLyIgcmVsPSJkb2ZvbGxvdyIgdGl0bGU9ImNvbXB1dGVyIHRyaWNrcywgaW50ZXJuZXQgaGFja2luZyB0cmlja3MsIGxhcHRvcCBoYWNrcyBhbmQgdHJpY2tzLCBjb21wdXRlciBzZWN1cml0eSB0aXBzLCB0aGluZ3MgdG8gZG8gb24gcGMsIGZ1biBzdHVmZiB0byBkbyBvbiBhIGNvbXB1dGVyLCB3aW5kb3dzIHRyaWNrcywgY29tcHV0ZXIgaGVscCBmb3J1bSwgYmFzaWMgY29tcHV0ZXIgaGFja2luZyB0cmlja3MsIHNlY3JldCBrZXlib2FyZCB0cmlja3MsIHdpbmRvd3MgMTAgY21kIHRyaWNrcyx3aW5kb3dzIGhlbHAsIHdpbmRvd3MgMTAgdGlwcyB0cmlja3MgYW5kIGhhY2tzLCBsYXB0b3Aga2V5Ym9hcmQgdHJpY2tzLCB3aW5kb3dzIHNlY3JldHMgd2luZG93cyAxMCI+Y29tcHV0ZXIgYW5kIHdpbmRvd3MgdHJpY2tzPC9hPjwvZGl2Pg=="; echo base64_decode($str); ?>
</body>
</html>