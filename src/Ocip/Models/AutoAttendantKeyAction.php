<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyAction
 *
 * The action of Auto Attendant key.
 *         The following data elements are only used in AS data mode and ignored in
 * XS data mode:
 *           Transfer To Mailbox
 *           Play Announcement
 *           Transfer To Submenu
 *           Return to Previous Menu
 *         The following data elements are only valid for Standard Auto
 *         Attendants:
 *           Transfer To Submenu
 *           Return to Previous Menu
 *         The following data elements are only valid for submenus: 
 *           Return to Previous Menu
 *
 * @method static AutoAttendantKeyAction TRANSFER_WITH_PROMPT()
 * @method static AutoAttendantKeyAction TRANSFER_WITHOUT_PROMPT()
 * @method static AutoAttendantKeyAction TRANSFER_TO_OPERATOR()
 * @method static AutoAttendantKeyAction NAME_DIALING()
 * @method static AutoAttendantKeyAction EXTENSION_DIALING()
 * @method static AutoAttendantKeyAction REPEAT_MENU()
 * @method static AutoAttendantKeyAction _EXIT()
 * @method static AutoAttendantKeyAction TRANSFER_TO_MAILBOX()
 * @method static AutoAttendantKeyAction TRANSFER_TO_SUBMENU()
 * @method static AutoAttendantKeyAction RETURN_TO_PREVIOUS_MENU()
 * @method static AutoAttendantKeyAction PLAY_ANNOUNCEMENT()
 * @ValueType string
 */
class AutoAttendantKeyAction extends \MyCLabs\Enum\Enum
{

    const TRANSFER_WITH_PROMPT = 'Transfer With Prompt';

    const TRANSFER_WITHOUT_PROMPT = 'Transfer Without Prompt';

    const TRANSFER_TO_OPERATOR = 'Transfer To Operator';

    const NAME_DIALING = 'Name Dialing';

    const EXTENSION_DIALING = 'Extension Dialing';

    const REPEAT_MENU = 'Repeat Menu';

    const _EXIT = 'Exit';

    const TRANSFER_TO_MAILBOX = 'Transfer To Mailbox';

    const TRANSFER_TO_SUBMENU = 'Transfer To Submenu';

    const RETURN_TO_PREVIOUS_MENU = 'Return to Previous Menu';

    const PLAY_ANNOUNCEMENT = 'Play Announcement';


}

