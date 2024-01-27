<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementFileType
 *
 * Announcement types - audio or video
 *
 * @method static AnnouncementFileType AUDIO()
 * @method static AnnouncementFileType VIDEO()
 * @EnumValueType string
 */
class AnnouncementFileType extends \MyCLabs\Enum\Enum
{
    public const AUDIO = 'Audio';

    public const VIDEO = 'Video';
}

