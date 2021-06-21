<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNValidationStatus
 *
 * DN availability
 *
 * @method static DNValidationStatus AVAILABLE()
 * @method static DNValidationStatus DUPLICATE()
 * @method static DNValidationStatus DUPLICATE_IN_LIST()
 * @method static DNValidationStatus INVALID()
 * @method static DNValidationStatus UNAVAILABLE()
 * @EnumValueType string
 */
class DNValidationStatus extends \MyCLabs\Enum\Enum
{

    const AVAILABLE = 'Available';

    const DUPLICATE = 'Duplicate';

    const DUPLICATE_IN_LIST = 'Duplicate In List';

    const INVALID = 'Invalid';

    const UNAVAILABLE = 'Unavailable';


}

