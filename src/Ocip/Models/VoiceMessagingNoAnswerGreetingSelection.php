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

    const _DEFAULT = 'Default';

    const PERSONAL = 'Personal';

    const ALTERNATE01 = 'Alternate01';

    const ALTERNATE02 = 'Alternate02';

    const ALTERNATE03 = 'Alternate03';


}

