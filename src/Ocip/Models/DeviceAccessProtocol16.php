<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceAccessProtocol16
 *
 * Protocols that an access device can use to fetch files from BroadWorks.
 *
 * @method static DeviceAccessProtocol16 HTTP()
 * @method static DeviceAccessProtocol16 HTTPS()
 * @method static DeviceAccessProtocol16 FTP()
 * @method static DeviceAccessProtocol16 TFTP()
 * @EnumValueType string
 */
class DeviceAccessProtocol16 extends \MyCLabs\Enum\Enum
{
    public const HTTP = 'Http';

    public const HTTPS = 'Https';

    public const FTP = 'FTP';

    public const TFTP = 'TFTP';
}

