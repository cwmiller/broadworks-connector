<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ForkingSupport
 *
 * Choices for Forking Dialog Support Method
 *
 * @method static ForkingSupport SINGLE_DIALOG()
 * @method static ForkingSupport MULTIPLE_DIALOGS()
 * @EnumValueType string
 */
class ForkingSupport extends \MyCLabs\Enum\Enum
{

    const SINGLE_DIALOG = 'Single Dialog';

    const MULTIPLE_DIALOGS = 'Multiple Dialogs';


}

