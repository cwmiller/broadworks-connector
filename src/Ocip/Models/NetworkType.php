<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkType
 *
 * The Type of Network for the call provided in the most significant contact from
 * the NS
 *
 * @method static NetworkType _PRIVATE()
 * @method static NetworkType _PUBLIC()
 * @ValueType string
 */
class NetworkType extends \MyCLabs\Enum\Enum
{

    const _PRIVATE = 'Private';

    const _PUBLIC = 'Public';


}

