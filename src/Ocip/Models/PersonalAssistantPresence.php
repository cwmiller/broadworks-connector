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
 * @EnumValueType string
 */
class PersonalAssistantPresence extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const BUSINESS_TRIP = 'Business Trip';

    public const GONE_FOR_THE_DAY = 'Gone for the Day';

    public const LUNCH = 'Lunch';

    public const MEETING = 'Meeting';

    public const OUT_OF_OFFICE = 'Out Of Office';

    public const TEMPORARILY_OUT = 'Temporarily Out';

    public const TRAINING = 'Training';

    public const UNAVAILABLE = 'Unavailable';

    public const VACATION = 'Vacation';
}

