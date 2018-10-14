<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseAdminNumberActivationAccess
 *
 * This data type is applicable only for an Enterprise administrator.
 *         Enterprise Administrator's policy for accessing
 *         the Number Activation information.
 *
 * @method static EnterpriseAdminNumberActivationAccess FULL()
 * @method static EnterpriseAdminNumberActivationAccess READ_ONLY()
 * @method static EnterpriseAdminNumberActivationAccess NONE()
 * @ValueType string
 */
class EnterpriseAdminNumberActivationAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';

    const NONE = 'None';


}

