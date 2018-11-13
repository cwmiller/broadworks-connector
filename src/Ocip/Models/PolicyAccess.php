<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PolicyAccess
 *
 * Possible values for administrative access policy settings.
 *
 * @method static PolicyAccess FULL()
 * @method static PolicyAccess RESTRICTED_FULLPROFILE()
 * @method static PolicyAccess RESTRICTED()
 * @method static PolicyAccess RESTRICTED_NOAUTHORIZE()
 * @method static PolicyAccess RESTRICTED_NOUSERASSOCIATION()
 * @method static PolicyAccess RESTRICTED_READPROFILE()
 * @method static PolicyAccess RESTRICTED_NOPROFILE()
 * @method static PolicyAccess RESTRICTED_NOGROUP()
 * @method static PolicyAccess RESTRICTED_FULLRESOURCE()
 * @method static PolicyAccess RESTRICTED_READRESOURCE()
 * @method static PolicyAccess NONE()
 * @EnumValueType string
 */
class PolicyAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const RESTRICTED_FULLPROFILE = 'Restricted-FullProfile';

    const RESTRICTED = 'Restricted';

    const RESTRICTED_NOAUTHORIZE = 'Restricted-NoAuthorize';

    const RESTRICTED_NOUSERASSOCIATION = 'Restricted-NoUserAssociation';

    const RESTRICTED_READPROFILE = 'Restricted-ReadProfile';

    const RESTRICTED_NOPROFILE = 'Restricted-NoProfile';

    const RESTRICTED_NOGROUP = 'Restricted-NoGroup';

    const RESTRICTED_FULLRESOURCE = 'Restricted-FullResource';

    const RESTRICTED_READRESOURCE = 'Restricted-ReadResource';

    const NONE = 'None';


}

