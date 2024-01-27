<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingNameRetrievalSourceIdentity
 *
 * Query Protocol.
 *
 * @method static CallingNameRetrievalSourceIdentity PRESENTATION_IDENTITY()
 * @method static CallingNameRetrievalSourceIdentity ASSERTED_IDENTITY()
 * @EnumValueType string
 */
class CallingNameRetrievalSourceIdentity extends \MyCLabs\Enum\Enum
{
    public const PRESENTATION_IDENTITY = 'Presentation Identity';

    public const ASSERTED_IDENTITY = 'Asserted Identity';
}

