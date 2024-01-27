<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PresentationIndicator
 *
 * Presentation Indicator
 *
 * @method static PresentationIndicator ANONYMOUS()
 * @method static PresentationIndicator ANONYMOUS_NAME()
 * @method static PresentationIndicator ANONYMOUS_URI()
 * @method static PresentationIndicator ANONYMOUS_UNAVAILABLE()
 * @method static PresentationIndicator _PUBLIC()
 * @method static PresentationIndicator UNAVAILABLE()
 * @EnumValueType string
 */
class PresentationIndicator extends \MyCLabs\Enum\Enum
{
    public const ANONYMOUS = 'Anonymous';

    public const ANONYMOUS_NAME = 'Anonymous Name';

    public const ANONYMOUS_URI = 'Anonymous URI';

    public const ANONYMOUS_UNAVAILABLE = 'Anonymous Unavailable';

    public const _PUBLIC = 'Public';

    public const UNAVAILABLE = 'Unavailable';
}

