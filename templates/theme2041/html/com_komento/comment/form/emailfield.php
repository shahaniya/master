<?php
/**
 * @package		Komento
 * @copyright	Copyright (C) 2012 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * Komento is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

if( $system->config->get( 'show_email' ) == 2 || ( $system->config->get( 'show_email' ) == 1 && $system->my->guest ) ) { ?>
	<li class="col kmt-form-email">
		<div>
			<input id="register-email" class="input text" name="email" type="text" tabindex="42" placeholder="<?php echo JText::_( 'COM_KOMENTO_FORM_EMAIL' ); ?>"<?php if( $system->config->get('require_email' ) == 2 || ( $system->config->get( 'require_email' ) == 1 && $system->my->guest ) ) echo ' required'; ?>>
		</div>
	</li>
<?php }
