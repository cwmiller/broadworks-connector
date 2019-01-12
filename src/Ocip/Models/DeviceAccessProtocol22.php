<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceAccessProtocol22
 *
 * Protocols that an access device can use to fetch files from BroadWorks.
 *
 * @method static DeviceAccessProtocol22 HTTP()
 * @method static DeviceAccessProtocol22 HTTPS()
 * @method static DeviceAccessProtocol22 FTP()
 * @method static DeviceAccessProtocol22 FTPS()
 * @method static DeviceAccessProtocol22 SFTP()
 * @method static DeviceAccessProtocol22 TFTP()
 * @EnumValueType string
 */
class DeviceAccessProtocol22 extends \MyCLabs\Enum\Enum
{

    const HTTP = 'Http';

    const HTTPS = 'Https';

    const FTP = 'FTP';

    const FTPS = 'FTPS';

    const SFTP = 'SFTP';

    const TFTP = 'TFTP';


}

