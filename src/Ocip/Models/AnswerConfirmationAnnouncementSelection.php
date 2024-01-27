<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnswerConfirmationAnnouncementSelection
 *
 * Anser Confirmation Announcement Selection.
 *
 * @method static AnswerConfirmationAnnouncementSelection SYSTEM()
 * @method static AnswerConfirmationAnnouncementSelection CUSTOM()
 * @EnumValueType string
 */
class AnswerConfirmationAnnouncementSelection extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const CUSTOM = 'Custom';
}

