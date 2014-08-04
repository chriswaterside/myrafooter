<?php // no direct access
/**
 * @module	RA Footer
 * @author	Chris Vaughan
 * @website	http://ramblers-webs.org.uk/
 * @copyright	Copyright (C) 2013 Chris Vaughan <webmaster@ramblers-webs.org.uk>. All rights reserved.
 * @license	http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

defined('_JEXEC') or die('Restricted access');
$startyear=$params->get('startyear');
$copyrighttext=$params->get('copyrighttext');
$ramblerswebs=$params->get('ramblerswebs');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/ramblers.css');

$footer = '<div class="footer" >';

// Copyright symbol
$copyright_symbol = '&copy;';
// Copyright year
$current_year = date('Y');		

$footer .= 'Copyright '.$copyright_symbol.' '.$startyear.'-'.$current_year.' '.$copyrighttext.'<br />';
if ($ramblerswebs!=0) {
	$footer .= 'Hosted by <a href="http://www.ramblers-webs.org.uk/" target="_blank">www.ramblers-webs.org.uk</a>. Centrally funded hosting for Areas and Groups<br />';
}
$footer .= "The Ramblers' Association is a company limited by guarantee, registered in England and Wales. Company registration number: 4458492. Registered Charity in England and Wales number: 1093577. <br />Registered office: 2nd floor, Camelford House, 87-90 Albert Embankment, London SE1 7TW.";



$footer.='</div>';

echo $footer;

// end

 ?>