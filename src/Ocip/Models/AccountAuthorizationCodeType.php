<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccountAuthorizationCodeType
 *
 * Account/Authorization Code Type.
 *
 * @method static AccountAuthorizationCodeType ACCOUNT_CODE()
 * @method static AccountAuthorizationCodeType AUTHORIZATION_CODE()
 * @method static AccountAuthorizationCodeType DEACTIVATED()
 * @EnumValueType string
 */
class AccountAuthorizationCodeType extends \MyCLabs\Enum\Enum
{
    public const ACCOUNT_CODE = 'Account Code';

    public const AUTHORIZATION_CODE = 'Authorization Code';

    public const DEACTIVATED = 'Deactivated';
}

