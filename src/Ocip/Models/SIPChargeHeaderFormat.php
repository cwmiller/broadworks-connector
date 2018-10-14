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
 * @ValueType string
 */
class SIPChargeHeaderFormat extends \MyCLabs\Enum\Enum
{

    const CHARGEHEADERSIP = 'ChargeHeaderSip';

    const CHARGEHEADERTEL = 'ChargeHeaderTel';

    const PCHARGEINFOSIP = 'PChargeInfoSip';

    const PCHARGEINFOTEL = 'PChargeInfoTel';

    const PAITELURI = 'PAITelURI';

    const DIVERSIONSIP = 'DiversionSip';


}

