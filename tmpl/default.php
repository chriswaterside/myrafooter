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
$background_color = $params->get('background_color');
$custom_background_color = $params->get('custom_background_colour_value');
$textcolour = $params->get('textcolour');
$standardimage = $params->get('standardimage');
$footer_image = $params->get('footer_image');
$imageposition = $params->get('imageposition');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/ramblers.css');
if ($footerstyle == 1) {
    if ($standardimage == 1) {
        $url = JURI::base() . "/modules/mod_rafooter/images/footer-bg.png";
    } else {
        $url = JURI::base() . $footer_image;
    }
    $text = "div#rt-bottom {background: url(" . $url . ") no-repeat scroll bottom " . $imageposition . "; background-size:contain; min-height: 120px}";
    $backcolour = getFooterColor($background_color, $custom_background_color);
    $text.="#rt-footer,#rt-copyright {background-color: " . $backcolour . "   !important;}";
    $document->addStyleDeclaration($text);
    if ($textcolour == 0) {
        $document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/footerwhitestyle.css');
    } else {
        $document->addStyleSheet(JURI::base() . 'modules/mod_rafooter/css/footerdarkstyle.css');
    }
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
    $footer .= "The Ramblers' Association is a company limited by guarantee, registered in England and Wales. Company registration number: 4458492. Ramblers Charity England & Wales No: 1093577 Scotland No: SC039799. <br />Registered office: 2nd floor, Camelford House, 87-90 Albert Embankment, London SE1 7TW.";
} else {
    $footer = '<div class="footer" id=rafooter>';
    $footer .= '<div>Ramblers Charity England & Wales No: 1093577 Scotland No: SC039799</div><div>' . $copyright_symbol . ' ' . $copyrighttext . '-' . $current_year . '</div>';
    if ($ramblerswebs != 0) {
        $footer .= '<div>Hosted by <a href="http://www.ramblers-webs.org.uk/" target="_blank">www.ramblers-webs.org.uk</a></div>';
    }
}
$footer.='</div>';

echo $footer;

function getFooterColor($option, $customvalue) {
    $color = '';
    switch ($option) {
        case "darkgrey" :
            $color = '#333333';
            break;
        case "pantone0110" :
            $color = '#D7A900';
            break;
        case "pantone0159" :
            $color = '#C75B12';
            break;
        case "pantone0186" :
            $color = '#C60C30';
            break;
        case "pantone0555" :
            $color = '#206C49';
            break;
        case "pantone0583" :
            $color = '#A8B400';
            break;
        case "pantone1815" :
            $color = '#782327';
            break;
        case "pantone4485" :
            $color = '#5B491F';
            break;
        case "pantone5565" :
            $color = '#8BA69C';
            break;
        case "pantone7474" :
            $color = '#007A87';
            break;
        case "white" :
            $color = '#FFFFFF';
            break;
        case "custom" :
            $color = $customvalue;
            break;
        case "transparent" :
            $color = '';
            break;
        default:
            $color = $customvalue;
            break;
    }
    return $color;
}

// end
?>