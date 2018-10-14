<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UnscreenedPresentationIdentityPolicy
 *
 * Unscreened Presentation Identity Policy Options
 *
 * @method static UnscreenedPresentationIdentityPolicy
 * PROFILE_PRESENTATION_IDENTITY()
 * @method static UnscreenedPresentationIdentityPolicy
 * UNSCREENED_PRESENTATION_IDENTITY()
 * @method static UnscreenedPresentationIdentityPolicy
 * UNSCREENED_PRESENTATION_IDENTITY_WITH_PROFILE_DOMAIN()
 * @ValueType string
 */
class UnscreenedPresentationIdentityPolicy extends \MyCLabs\Enum\Enum
{

    const PROFILE_PRESENTATION_IDENTITY = 'Profile Presentation Identity';

    const UNSCREENED_PRESENTATION_IDENTITY = 'Unscreened Presentation Identity';

    const UNSCREENED_PRESENTATION_IDENTITY_WITH_PROFILE_DOMAIN = 'Unscreened Presentation Identity With Profile Domain';


}

