<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2013
 * @package    registration_privacy_protection
 * @license    LGPL
 * @filesource
 */

/**
 * Palettes
 */
foreach ($GLOBALS['TL_DCA']['tl_member']['palettes'] as $key => $row)
{
    if ($key == '__selector__') continue;
    
    $arrPalettes = explode(";", $row);
    foreach ($arrPalettes as $intRowKey => $strRow)
    {
        if (strpos($strRow, 'personal_legend') !== false)
        {
            $arrPalettes[$intRowKey] .= ',privacy_protection';
        }
    }
    $GLOBALS['TL_DCA']['tl_member']['palettes'][$key] = implode(";", $arrPalettes);
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['privacy_protection'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_member']['privacy_protection'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array(
        'mandatory'  => true,
        'feEditable' => true,
        'feViewable' => true,
        'feGroup'    => 'personal',
        'tl_class'   => 'w50 m12'
    )
);

?>