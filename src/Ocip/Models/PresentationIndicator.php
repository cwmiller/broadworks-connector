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
 * @ValueType string
 */
class PresentationIndicator extends \MyCLabs\Enum\Enum
{

    const ANONYMOUS = 'Anonymous';

    const ANONYMOUS_NAME = 'Anonymous Name';

    const ANONYMOUS_URI = 'Anonymous URI';

    const ANONYMOUS_UNAVAILABLE = 'Anonymous Unavailable';

    const _PUBLIC = 'Public';

    const UNAVAILABLE = 'Unavailable';


}

