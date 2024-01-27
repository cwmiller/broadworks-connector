<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomType
 *
 * Choices for collaborate room type
 *
 * @method static CollaborateRoomType INSTANT_ROOM()
 * @method static CollaborateRoomType MY_ROOM()
 * @method static CollaborateRoomType PROJECT_ROOM()
 * @EnumValueType string
 */
class CollaborateRoomType extends \MyCLabs\Enum\Enum
{
    public const INSTANT_ROOM = 'Instant Room';

    public const MY_ROOM = 'My Room';

    public const PROJECT_ROOM = 'Project Room';
}

