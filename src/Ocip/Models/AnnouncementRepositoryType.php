<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementRepositoryType
 *
 * The type of Announcement, the possible values are "Group" for a group level 
 *         announcement or "User" for a user level announcement.
 *
 * @method static AnnouncementRepositoryType GROUP()
 * @method static AnnouncementRepositoryType USER()
 * @EnumValueType string
 */
class AnnouncementRepositoryType extends \MyCLabs\Enum\Enum
{
    public const GROUP = 'Group';

    public const USER = 'User';
}

