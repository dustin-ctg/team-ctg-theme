<?php
/*
 * 
 * Confetti Bits Admin Filter
 * @since Version 1.0.0
 *
 */

/*---------- Make sure that only those who can edit points can see this part ----------*/
    if ( current_user_can( 'edit_users' ) ) {
?>
    <div class="confetti-bits-wrapper">
	<?php
	
    get_template_part( 'confetti-bits/template-parts/content', 'award-member-search' );
    get_template_part( 'confetti-bits/template-parts/content', 'award-form'	);
		if(is_this_admins() || is_this_dustin()) {
    get_template_part( 'confetti-bits/template-parts/content', 'award-import' );			
		}

	get_template_part( 'confetti-bits/template-parts/content', 'flash-messages' );

		?></div>

<?php
}