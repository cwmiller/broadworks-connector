<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PersonalAssistantPresence
 *
 * Personal Assistant Presence.
 *
 * @method static PersonalAssistantPresence NONE()
 * @method static PersonalAssistantPresence BUSINESS_TRIP()
 * @method static PersonalAssistantPresence GONE_FOR_THE_DAY()
 * @method static PersonalAssistantPresence LUNCH()
 * @method static PersonalAssistantPresence MEETING()
 * @method static PersonalAssistantPresence OUT_OF_OFFICE()
 * @method static PersonalAssistantPresence TEMPORARILY_OUT()
 * @method static PersonalAssistantPresence TRAINING()
 * @method static PersonalAssistantPresence UNAVAILABLE()
 * @method static PersonalAssistantPresence VACATION()
 * @ValueType string
 */
class PersonalAssistantPresence extends \MyCLabs\Enum\Enum
{

    const NONE = 'None';

    const BUSINESS_TRIP = 'Business Trip';

    const GONE_FOR_THE_DAY = 'Gone for the Day';

    const LUNCH = 'Lunch';

    const MEETING = 'Meeting';

    const OUT_OF_OFFICE = 'Out Of Office';

    const TEMPORARILY_OUT = 'Temporarily Out';

    const TRAINING = 'Training';

    const UNAVAILABLE = 'Unavailable';

    const VACATION = 'Vacation';


}

