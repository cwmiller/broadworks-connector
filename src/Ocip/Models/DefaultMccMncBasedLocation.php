<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DefaultMccMncBasedLocation
 *
 * The default classification for calls under the Mcc/Mnc based location system for originating SIP INVITEs without PANI headers.
 *
 * @method static DefaultMccMncBasedLocation LOCAL()
 * @method static DefaultMccMncBasedLocation ROAMING()
 * @EnumValueType string
 */
class DefaultMccMncBasedLocation extends \MyCLabs\Enum\Enum
{
    public const LOCAL = 'Local';

    public const ROAMING = 'Roaming';
}

