<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DtmfTransmissionSignalingContentType
 *
 * The signaling content type.
 *
 * @method static DtmfTransmissionSignalingContentType APPLICATION_DTMF()
 * @method static DtmfTransmissionSignalingContentType APPLICATION_DTMF_RELAY()
 * @method static DtmfTransmissionSignalingContentType AUDIO_TELEPHONE_EVENT()
 * @EnumValueType string
 */
class DtmfTransmissionSignalingContentType extends \MyCLabs\Enum\Enum
{
    public const APPLICATION_DTMF = 'application/dtmf';

    public const APPLICATION_DTMF_RELAY = 'application/dtmf-relay';

    public const AUDIO_TELEPHONE_EVENT = 'audio/telephone-event';
}

