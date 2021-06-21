<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterEventRecordingFileRotationPeriodMinutes
 *
 * This parameter specifies the amount of time the active Call Center
 *         activity file is open for recording activities (in minutes). When
 *         the file is closed, a new file is open to continue recording
 *         activities, and the closed file is transferred to a remote host.
 *
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _1()
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _5()
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _10()
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _15()
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _30()
 * @method static CallCenterEventRecordingFileRotationPeriodMinutes _60()
 * @EnumValueType string
 */
class CallCenterEventRecordingFileRotationPeriodMinutes extends \MyCLabs\Enum\Enum
{

    const _1 = '1';

    const _5 = '5';

    const _10 = '10';

    const _15 = '15';

    const _30 = '30';

    const _60 = '60';


}

