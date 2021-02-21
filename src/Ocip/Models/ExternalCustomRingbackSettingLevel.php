<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalCustomRingbackSettingLevel
 *
 * Choices for the External Custom Ringback feature to decide which type of settings to use.
 *
 * @method static ExternalCustomRingbackSettingLevel SERVICE_PROVIDER()
 * @method static ExternalCustomRingbackSettingLevel USER()
 * @EnumValueType string
 */
class ExternalCustomRingbackSettingLevel extends \MyCLabs\Enum\Enum
{

    const SERVICE_PROVIDER = 'Service Provider';

    const USER = 'User';


}

