<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSCallIdentifierMode
 *
 * The GETS Call Identifier Mode.
 *
 * @method static GETSCallIdentifierMode REQUEST_URI()
 * @method static GETSCallIdentifierMode RPH()
 * @method static GETSCallIdentifierMode RPH_REQUEST_URI()
 * @EnumValueType string
 */
class GETSCallIdentifierMode extends \MyCLabs\Enum\Enum
{

    const REQUEST_URI = 'Request-URI';

    const RPH = 'RPH';

    const RPH_REQUEST_URI = 'RPH-Request-URI';


}

