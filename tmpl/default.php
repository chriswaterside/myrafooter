<?php

// no direct access
/**
 * @module	RA Footer
 * @author	Chris Vaughan
 * @website	http://ramblers-webs.org.uk/
 * @copyright	Copyright (C) 2013 Chris Vaughan <webmaster@ramblers-webs.org.uk>. All rights reserved.
 * @license	http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
$startyear = $params->get('startyear');
$copyrighttext = $params->get('copyrighttext');
$ramblerswebs = $params->get('ramblerswebs');
$footersize = $params->get('footersize');
$footerstyle = $params->get('footerstyle');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/ramblers.css');
if ($footerstyle == 1) {
    $document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/footerstyle.css');
}

// Copyright symbol
$copyright_symbol = '&copy;';
// Copyright year
$current_year = date('Y');
if ($footersize == 1) {
    $footer = '<div class="footer" >';
    $footer .= 'Copyright ' . $copyright_symbol . ' ' . $startyear . '-' . $current_year . ' ' . $copyrighttext . '<br />';
    if ($ramblerswebs != 0) {
        $footer .= 'Hosted by <a href="http://www.ramblers-webs.org.uk/" target="_blank">www.ramblers-webs.org.uk</a>. Centrally funded hosting for Areas and Groups<br />';
    }
    $footer .= "The Ramblers' Association is a company limited by guarantee, registered in England and Wales. Company registration number: 4458492. Registered Charity in England and Wales number: 1093577. <br />Registered office: 2nd floor, Camelford House, 87-90 Albert Embankment, London SE1 7TW.";
} else {
    $footer = '<div class="footer" id=rafooter>';
    $footer .= '<div>Ramblers Charity England & Wales No: 1093577 Scotland No: SC039799</div><div>' . $copyright_symbol . ' ' . $copyrighttext . '-' . $current_year . '</div>';
    if ($ramblerswebs != 0) {
        $footer .= '<div>Hosted by <a href="http://www.ramblers-webs.org.uk/" target="_blank">www.ramblers-webs.org.uk</a></div>';
    }
}
$footer.='</div>';

echo $footer;

// end
?>