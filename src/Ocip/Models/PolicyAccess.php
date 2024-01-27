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
    public const FULL = 'Full';

    public const RESTRICTED_FULLPROFILE = 'Restricted-FullProfile';

    public const RESTRICTED = 'Restricted';

    public const RESTRICTED_NOAUTHORIZE = 'Restricted-NoAuthorize';

    public const RESTRICTED_NOUSERASSOCIATION = 'Restricted-NoUserAssociation';

    public const RESTRICTED_READPROFILE = 'Restricted-ReadProfile';

    public const RESTRICTED_NOPROFILE = 'Restricted-NoProfile';

    public const RESTRICTED_NOGROUP = 'Restricted-NoGroup';

    public const RESTRICTED_FULLRESOURCE = 'Restricted-FullResource';

    public const RESTRICTED_READRESOURCE = 'Restricted-ReadResource';

    public const NONE = 'None';
}

