<?php
/**
 * Control Panel JS plugin for Craft CMS
 *
 * Add custom JS to your Control Panel.
 *
 * @author    Double Secret Agency
 * @link      https://www.doublesecretagency.com/
 * @copyright Copyright (c) 2014 Double Secret Agency
 */

namespace doublesecretagency\cpjs\models;

use craft\base\Model;

/**
 * Class Settings
 * @since 2.0.0
 */
class Settings extends Model
{

    /** @var string|null  $jsFile  Path for the JS file to load in the control panel. */
    public $jsFile;

    /** @var string|null  $additionalJs  Any additional JS which may be added directly. */
    public $additionalJs;

}