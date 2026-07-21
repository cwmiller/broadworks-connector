<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AudioFileCodecRI
 *
 * Audio file codec.
 *         The following values are only used in XS data mode and will fail in AS data mode:
 *           EVRC0
 *           EVRCNW
 *           EVRCNW0
 *         The following values are only used in AS data mode and will fail in XS data mode: 
 *           OPUS
 *           EVS
 *
 * @method static AudioFileCodecRI NONE()
 * @method static AudioFileCodecRI G711()
 * @method static AudioFileCodecRI G722()
 * @method static AudioFileCodecRI G729()
 * @method static AudioFileCodecRI G726()
 * @method static AudioFileCodecRI AMR()
 * @method static AudioFileCodecRI AMR_WB()
 * @method static AudioFileCodecRI OPUS()
 * @method static AudioFileCodecRI EVRC0()
 * @method static AudioFileCodecRI EVRCNW()
 * @method static AudioFileCodecRI EVRCNW0()
 * @method static AudioFileCodecRI EVS()
 * @EnumValueType string
 */
class AudioFileCodecRI extends \MyCLabs\Enum\Enum
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

    public const EVS = 'EVS';
}

