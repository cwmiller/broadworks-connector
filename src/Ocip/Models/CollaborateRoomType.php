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
 * @ValueType string
 */
class CollaborateRoomType extends \MyCLabs\Enum\Enum
{

    const INSTANT_ROOM = 'Instant Room';

    const MY_ROOM = 'My Room';

    const PROJECT_ROOM = 'Project Room';


}

