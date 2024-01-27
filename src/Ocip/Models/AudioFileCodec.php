<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AudioFileCodec
 *
 * Audio file codec.
 *
 * @method static AudioFileCodec NONE()
 * @method static AudioFileCodec G711()
 * @method static AudioFileCodec G722()
 * @method static AudioFileCodec G729()
 * @method static AudioFileCodec G726()
 * @method static AudioFileCodec AMR()
 * @method static AudioFileCodec AMR_WB()
 * @EnumValueType string
 */
class AudioFileCodec extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const G711 = 'G711';

    public const G722 = 'G722';

    public const G729 = 'G729';

    public const G726 = 'G726';

    public const AMR = 'AMR';

    public const AMR_WB = 'AMR-WB';
}

