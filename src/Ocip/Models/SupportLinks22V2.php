<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SupportLinks22V2
 *
 * Define the support links values.
 *
 * @method static SupportLinks22V2 NOT_SUPPORTED()
 * @method static SupportLinks22V2 SUPPORT_LINKS_FROM_DEVICES()
 * @method static SupportLinks22V2 SUPPORT_LINK_TO_DEVICE()
 * @method static SupportLinks22V2 SUPPORT_LINK_TO_DEVICE_AND_USER()
 * @EnumValueType string
 */
class SupportLinks22V2 extends \MyCLabs\Enum\Enum
{
    public const NOT_SUPPORTED = 'Not Supported';

    public const SUPPORT_LINKS_FROM_DEVICES = 'Support Links from Devices';

    public const SUPPORT_LINK_TO_DEVICE = 'Support Link to Device';

    public const SUPPORT_LINK_TO_DEVICE_AND_USER = 'Support Link to Device and User';
}

