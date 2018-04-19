<?php 	

	/**
	 * get_bloc_accordeon
	 *
	 *  @type	function
	 *  @date	19/04/18
	 *  @since	1.1.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF accordeon fields
	 */

	function get_bloc_accordeon (){

		$fluxi_content_accordeon = get_sub_field('titre_accordeon');		

		if( $fluxi_content_accordeon ):

			$fluxi_content_accordeon = '<div class="c-accordeon content-jump js-accordeon">';

			$fluxi_content_accordeon .= '<h3 class="c-accordeon__title">';
			$fluxi_content_accordeon .= get_sub_field('titre_accordeon');
			$fluxi_content_accordeon .= '<button class="c-accordeon__title__icon"><i class="far fa-angle-down" aria-hidden="true"></i></button>';
			$fluxi_content_accordeon .= '</h3>';

			$text_accordeon = get_sub_field('texte_accordeon');

			if( $text_accordeon ):				

				$fluxi_content_accordeon .= '<div class="c-accordeon__content js-accordeon-content">';			

					$fluxi_content_accordeon .= $text_accordeon;

				$fluxi_content_accordeon .= '</div>';

			endif;

			$fluxi_content_accordeon .= '</div>';

			return $fluxi_content_accordeon;

		endif;	

	}
		
?>
