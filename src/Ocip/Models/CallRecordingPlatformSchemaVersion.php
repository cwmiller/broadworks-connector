<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallRecordingPlatformSchemaVersion
 *
 * Supported versions of the BroadWorks-specific extension metadata.
 *
 * @method static CallRecordingPlatformSchemaVersion _1_0()
 * @method static CallRecordingPlatformSchemaVersion _2_0()
 * @method static CallRecordingPlatformSchemaVersion _3_0()
 * @method static CallRecordingPlatformSchemaVersion _4_0()
 * @EnumValueType string
 */
class CallRecordingPlatformSchemaVersion extends \MyCLabs\Enum\Enum
{
    public const _1_0 = '1.0';

    public const _2_0 = '2.0';

    public const _3_0 = '3.0';

    public const _4_0 = '4.0';
}

