<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionAdmissionControlCodecSelectionPolicyType
 *
 * Session Admission Control codec selection policy.
 *         Determines which codec is selected from the SDP offer when using SAC weight count.
 *
 * @method static SessionAdmissionControlCodecSelectionPolicyType HIGHEST_WEIGHT()
 * @method static SessionAdmissionControlCodecSelectionPolicyType PREFERRED_CODEC()
 * @EnumValueType string
 */
class SessionAdmissionControlCodecSelectionPolicyType extends \MyCLabs\Enum\Enum
{

    const HIGHEST_WEIGHT = 'Highest Weight';

    const PREFERRED_CODEC = 'Preferred Codec';


}

