<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AudioFileCodecExtended
 *
 * Audio file codec.
 *         The following values are only used in XS data mode and will fail in AS data mode:
 *           EVRC0
 *           EVRCNW
 *           EVRCNW0
 *
 * @method static AudioFileCodecExtended NONE()
 * @method static AudioFileCodecExtended G711()
 * @method static AudioFileCodecExtended G722()
 * @method static AudioFileCodecExtended G729()
 * @method static AudioFileCodecExtended G726()
 * @method static AudioFileCodecExtended AMR()
 * @method static AudioFileCodecExtended AMR_WB()
 * @method static AudioFileCodecExtended EVRC0()
 * @method static AudioFileCodecExtended EVRCNW()
 * @method static AudioFileCodecExtended EVRCNW0()
 * @EnumValueType string
 */
class AudioFileCodecExtended extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const G711 = 'G711';

    public const G722 = 'G722';

    public const G729 = 'G729';

    public const G726 = 'G726';

    public const AMR = 'AMR';

    public const AMR_WB = 'AMR-WB';

    public const EVRC0 = 'EVRC0';

    public const EVRCNW = 'EVRCNW';

    public const EVRCNW0 = 'EVRCNW0';
}

