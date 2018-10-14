<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNPolicySelection
 *
 * Enterprise Voice VPN Location Selection.
 *
 * @method static EnterpriseVoiceVPNPolicySelection _PRIVATE()
 * @method static EnterpriseVoiceVPNPolicySelection _PUBLIC()
 * @method static EnterpriseVoiceVPNPolicySelection ROUTE()
 * @method static EnterpriseVoiceVPNPolicySelection TREATMENT()
 * @ValueType string
 */
class EnterpriseVoiceVPNPolicySelection extends \MyCLabs\Enum\Enum
{

    const _PRIVATE = 'Private';

    const _PUBLIC = 'Public';

    const ROUTE = 'Route';

    const TREATMENT = 'Treatment';


}

