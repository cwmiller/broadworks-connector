<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingNoAnswerGreetingSelection
 *
 * Announcement Selection.
 *
 * @method static VoiceMessagingNoAnswerGreetingSelection _DEFAULT()
 * @method static VoiceMessagingNoAnswerGreetingSelection PERSONAL()
 * @method static VoiceMessagingNoAnswerGreetingSelection ALTERNATE01()
 * @method static VoiceMessagingNoAnswerGreetingSelection ALTERNATE02()
 * @method static VoiceMessagingNoAnswerGreetingSelection ALTERNATE03()
 * @EnumValueType string
 */
class VoiceMessagingNoAnswerGreetingSelection extends \MyCLabs\Enum\Enum
{
    public const _DEFAULT = 'Default';

    public const PERSONAL = 'Personal';

    public const ALTERNATE01 = 'Alternate01';

    public const ALTERNATE02 = 'Alternate02';

    public const ALTERNATE03 = 'Alternate03';
}

