<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPChargeHeaderFormat
 *
 * Choices for the SIP charge header format.
 *
 * @method static SIPChargeHeaderFormat CHARGEHEADERSIP()
 * @method static SIPChargeHeaderFormat CHARGEHEADERTEL()
 * @method static SIPChargeHeaderFormat PCHARGEINFOSIP()
 * @method static SIPChargeHeaderFormat PCHARGEINFOTEL()
 * @method static SIPChargeHeaderFormat PAITELURI()
 * @method static SIPChargeHeaderFormat DIVERSIONSIP()
 * @EnumValueType string
 */
class SIPChargeHeaderFormat extends \MyCLabs\Enum\Enum
{
    public const CHARGEHEADERSIP = 'ChargeHeaderSip';

    public const CHARGEHEADERTEL = 'ChargeHeaderTel';

    public const PCHARGEINFOSIP = 'PChargeInfoSip';

    public const PCHARGEINFOTEL = 'PChargeInfoTel';

    public const PAITELURI = 'PAITelURI';

    public const DIVERSIONSIP = 'DiversionSip';
}

