<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SupportLinks
 *
 * Define the support links values.
 *
 * @method static SupportLinks NOT_SUPPORTED()
 * @method static SupportLinks SUPPORT_LINKS_FROM_DEVICES()
 * @method static SupportLinks SUPPORT_LINK_TO_DEVICE()
 * @EnumValueType string
 */
class SupportLinks extends \MyCLabs\Enum\Enum
{
    public const NOT_SUPPORTED = 'Not Supported';

    public const SUPPORT_LINKS_FROM_DEVICES = 'Support Links from Devices';

    public const SUPPORT_LINK_TO_DEVICE = 'Support Link to Device';
}

