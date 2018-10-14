<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseAdminNetworkPolicyAccess
 *
 * This data type is applicable only for an Enterprise administrator.
 *         It specifies the Enterprise Administrator's policy for accessing network
 * policies (e.g. - VoiceVPN).
 *
 * @method static EnterpriseAdminNetworkPolicyAccess FULL()
 * @method static EnterpriseAdminNetworkPolicyAccess NONE()
 * @ValueType string
 */
class EnterpriseAdminNetworkPolicyAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

