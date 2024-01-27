<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AudioFileCodec22
 *
 * Audio file codec.
 *         The following values are only used in XS data mode and will fail in AS data mode:
 *           EVRC0
 *           EVRCNW
 *           EVRCNW0
 *         The following values are only used in AS data mode and will fail in XS data mode: 
 *           OPUS
 *
 * @method static AudioFileCodec22 NONE()
 * @method static AudioFileCodec22 G711()
 * @method static AudioFileCodec22 G722()
 * @method static AudioFileCodec22 G729()
 * @method static AudioFileCodec22 G726()
 * @method static AudioFileCodec22 AMR()
 * @method static AudioFileCodec22 AMR_WB()
 * @method static AudioFileCodec22 OPUS()
 * @method static AudioFileCodec22 EVRC0()
 * @method static AudioFileCodec22 EVRCNW()
 * @method static AudioFileCodec22 EVRCNW0()
 * @EnumValueType string
 */
class AudioFileCodec22 extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const G711 = 'G711';

    public const G722 = 'G722';

    public const G729 = 'G729';

    public const G726 = 'G726';

    public const AMR = 'AMR';

    public const AMR_WB = 'AMR-WB';

    public const OPUS = 'OPUS';

    public const EVRC0 = 'EVRC0';

    public const EVRCNW = 'EVRCNW';

    public const EVRCNW0 = 'EVRCNW0';
}

