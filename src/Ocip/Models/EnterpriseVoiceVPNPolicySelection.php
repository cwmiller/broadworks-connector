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
 * @EnumValueType string
 */
class EnterpriseVoiceVPNPolicySelection extends \MyCLabs\Enum\Enum
{
    public const _PRIVATE = 'Private';

    public const _PUBLIC = 'Public';

    public const ROUTE = 'Route';

    public const TREATMENT = 'Treatment';
}

