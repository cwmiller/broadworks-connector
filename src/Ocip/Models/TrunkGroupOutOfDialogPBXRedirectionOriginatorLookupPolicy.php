<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy
 *
 * Trunk Group out-of-dialog PBX Redirection Originator Lookup policy.
 *
 * @method static TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy ASSERTED()
 * @method static TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy PRESENTATION()
 * @method static TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy ASSERTED_OR_PRESENTATION()
 * @EnumValueType string
 */
class TrunkGroupOutOfDialogPBXRedirectionOriginatorLookupPolicy extends \MyCLabs\Enum\Enum
{

    const ASSERTED = 'Asserted';

    const PRESENTATION = 'Presentation';

    const ASSERTED_OR_PRESENTATION = 'Asserted Or Presentation';


}

