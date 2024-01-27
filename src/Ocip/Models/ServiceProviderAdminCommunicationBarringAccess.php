<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminCommunicationBarringAccess
 *
 * Service Providers Administrator's policy for accessing
 *         the Communication Barring information.
 *
 * @method static ServiceProviderAdminCommunicationBarringAccess FULL()
 * @method static ServiceProviderAdminCommunicationBarringAccess READ_ONLY()
 * @EnumValueType string
 */
class ServiceProviderAdminCommunicationBarringAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

