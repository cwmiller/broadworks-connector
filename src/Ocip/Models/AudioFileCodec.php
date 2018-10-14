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
 * @ValueType string
 */
class AudioFileCodec extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const G711 = 'G711';

    const G722 = 'G722';

    const G729 = 'G729';

    const G726 = 'G726';

    const AMR = 'AMR';

    const AMR_WB = 'AMR-WB';


}

