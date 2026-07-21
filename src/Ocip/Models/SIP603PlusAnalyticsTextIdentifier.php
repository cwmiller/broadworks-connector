<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIP603PlusAnalyticsTextIdentifier
 *
 * Choices for the SIP 603 Plus response redress identifier.
 *
 * @method static SIP603PlusAnalyticsTextIdentifier NONE()
 * @method static SIP603PlusAnalyticsTextIdentifier CORRELATIONID()
 * @method static SIP603PlusAnalyticsTextIdentifier GENERATEDUUID()
 * @EnumValueType string
 */
class SIP603PlusAnalyticsTextIdentifier extends \MyCLabs\Enum\Enum
{
    public const NONE = 'none';

    public const CORRELATIONID = 'correlationId';

    public const GENERATEDUUID = 'generatedUuid';
}

