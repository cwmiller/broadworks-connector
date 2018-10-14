<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MediaFileType
 *
 * The media type of media data.
 *         WMA - Windows Media Audio file
 *         WAV - A WAV file
 *         3GP - A 3GP file
 *         MOV - A MOV file using a H.263 or H.264 codec.
 *
 * @method static MediaFileType WMA()
 * @method static MediaFileType WAV()
 * @method static MediaFileType _3GP()
 * @method static MediaFileType MOV()
 * @ValueType string
 */
class MediaFileType extends \MyCLabs\Enum\Enum
{

    const WMA = 'WMA';

    const WAV = 'WAV';

    const _3GP = '3GP';

    const MOV = 'MOV';


}

