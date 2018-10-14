<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterMediaOnHoldMessageSelection
 *
 * Call center media on hold message selection.
 *
 * @method static CallCenterMediaOnHoldMessageSelection _DEFAULT()
 * @method static CallCenterMediaOnHoldMessageSelection URL()
 * @method static CallCenterMediaOnHoldMessageSelection CUSTOM()
 * @method static CallCenterMediaOnHoldMessageSelection EXTERNAL()
 * @ValueType string
 */
class CallCenterMediaOnHoldMessageSelection extends \MyCLabs\Enum\Enum
{

    const _DEFAULT = 'Default';

    const URL = 'URL';

    const CUSTOM = 'Custom';

    const EXTERNAL = 'External';


}

