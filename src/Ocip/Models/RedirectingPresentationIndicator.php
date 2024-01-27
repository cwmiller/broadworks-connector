<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RedirectingPresentationIndicator
 *
 * The presentation indicator for the last redirecting party
 *
 * @method static RedirectingPresentationIndicator ANONYMOUS()
 * @method static RedirectingPresentationIndicator ANONYMOUS_NAME()
 * @method static RedirectingPresentationIndicator ANONYMOUS_URI()
 * @method static RedirectingPresentationIndicator _PUBLIC()
 * @EnumValueType string
 */
class RedirectingPresentationIndicator extends \MyCLabs\Enum\Enum
{
    public const ANONYMOUS = 'Anonymous';

    public const ANONYMOUS_NAME = 'Anonymous Name';

    public const ANONYMOUS_URI = 'Anonymous URI';

    public const _PUBLIC = 'Public';
}

