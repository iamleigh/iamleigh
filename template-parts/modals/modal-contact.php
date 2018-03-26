<div id="iamui-modal-footer-popup-contact" class="iamui-modal footer-popup-contact">

	<div class="iamui-modal--mask" aria-hidden="true"></div>

	<div class="iamui-modal--box">

        <div class="iamui-box--header">
            
            <div class="iamui-header--text">

                <h2 class="iamui-title"><?php _e( "Hello", 'iamleigh' ); ?></h2>

            </div>

            <div class="iamui-header--action">

				<button class="iamui-action--button" aria-hidden="true"><?php get_template_part( "template-parts/svg/icon", "close" ); ?></button>

				<button class="iamui-screen-reader"><?php _e( 'Close contact box', 'iamleigh' ); ?></button>

			</div>
            
        </div>

		<div class="iamui-box--section">

            <div class="iamui-section--content">

                <?php echo do_shortcode('[contact-form-7 title="Contact"]'); ?>

            </div>

        </div>

    </div>

</div>