<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderConferenceURISettingLevel
 *
 * Choices for the service provider conference URI
 *         setting to decide which level of settings to use.
 *
 * @method static ServiceProviderConferenceURISettingLevel SYSTEM()
 * @method static ServiceProviderConferenceURISettingLevel SERVICE_PROVIDER()
 * @ValueType string
 */
class ServiceProviderConferenceURISettingLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const SERVICE_PROVIDER = 'Service Provider';


}

