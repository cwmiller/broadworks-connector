<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyAction
 *
 * The action of Auto Attendant key.
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
 * @EnumValueType string
 */
class AutoAttendantKeyAction extends \MyCLabs\Enum\Enum
{
    public const TRANSFER_WITH_PROMPT = 'Transfer With Prompt';

    public const TRANSFER_WITHOUT_PROMPT = 'Transfer Without Prompt';

    public const TRANSFER_TO_OPERATOR = 'Transfer To Operator';

    public const NAME_DIALING = 'Name Dialing';

    public const EXTENSION_DIALING = 'Extension Dialing';

    public const REPEAT_MENU = 'Repeat Menu';

    public const _EXIT = 'Exit';

    public const TRANSFER_TO_MAILBOX = 'Transfer To Mailbox';

    public const TRANSFER_TO_SUBMENU = 'Transfer To Submenu';

    public const RETURN_TO_PREVIOUS_MENU = 'Return to Previous Menu';

    public const PLAY_ANNOUNCEMENT = 'Play Announcement';
}

