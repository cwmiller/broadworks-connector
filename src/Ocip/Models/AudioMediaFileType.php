<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AudioMediaFileType
 *
 * The media type of media data.
 *         WMA - Windows Media Audio file
 *         WAV - A WAV file
 *         MP3 - An MP3 file
 *         This data type is only used in XS mode as MP3 is only supported in XS data mode.
 *
 * @method static AudioMediaFileType WMA()
 * @method static AudioMediaFileType WAV()
 * @method static AudioMediaFileType MP3()
 * @EnumValueType string
 */
class AudioMediaFileType extends \MyCLabs\Enum\Enum
{
    public const WMA = 'WMA';

    public const WAV = 'WAV';

    public const MP3 = 'MP3';
}

