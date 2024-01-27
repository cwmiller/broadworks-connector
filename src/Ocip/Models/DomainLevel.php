<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DomainLevel
 *
 * Identifies if a domain is a system level domain or a reseller level domain.
 *
 * @method static DomainLevel SYSTEM()
 * @method static DomainLevel RESELLER()
 * @EnumValueType string
 */
class DomainLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const RESELLER = 'Reseller';
}

