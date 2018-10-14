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
 * @ValueType string
 */
class AccountAuthorizationCodeType extends \MyCLabs\Enum\Enum
{

    const ACCOUNT_CODE = 'Account Code';

    const AUTHORIZATION_CODE = 'Authorization Code';

    const DEACTIVATED = 'Deactivated';


}

