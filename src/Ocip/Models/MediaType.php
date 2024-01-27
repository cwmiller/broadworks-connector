<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MediaType
 *
 * Media types.
 *
 * @method static MediaType AUDIO()
 * @method static MediaType VIDEO()
 * @method static MediaType IMAGE()
 * @EnumValueType string
 */
class MediaType extends \MyCLabs\Enum\Enum
{
    public const AUDIO = 'Audio';

    public const VIDEO = 'Video';

    public const IMAGE = 'Image';
}

