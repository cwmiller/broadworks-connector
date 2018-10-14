<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementFileType
 *
 * Announcement types - audio or video
 *
 * @method static AnnouncementFileType AUDIO()
 * @method static AnnouncementFileType VIDEO()
 * @ValueType string
 */
class AnnouncementFileType extends \MyCLabs\Enum\Enum
{

    const AUDIO = 'Audio';

    const VIDEO = 'Video';


}

