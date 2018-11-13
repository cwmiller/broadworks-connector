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

    const AUDIO = 'Audio';

    const VIDEO = 'Video';

    const IMAGE = 'Image';


}

