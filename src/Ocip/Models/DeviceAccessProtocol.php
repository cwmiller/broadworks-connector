<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceAccessProtocol
 *
 * Protocols that an access device can use to fetch files from BroadWorks.
 *
 * @method static DeviceAccessProtocol HTTP()
 * @method static DeviceAccessProtocol HTTPS()
 * @method static DeviceAccessProtocol FTP()
 * @EnumValueType string
 */
class DeviceAccessProtocol extends \MyCLabs\Enum\Enum
{
    public const HTTP = 'Http';

    public const HTTPS = 'Https';

    public const FTP = 'FTP';
}

