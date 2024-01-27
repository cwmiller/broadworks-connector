<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocol22
 *
 * File repository protocol.
 *
 * @method static FileRepositoryProtocol22 WEBDAV()
 * @method static FileRepositoryProtocol22 FTP()
 * @method static FileRepositoryProtocol22 FTPS()
 * @method static FileRepositoryProtocol22 SFTP()
 * @EnumValueType string
 */
class FileRepositoryProtocol22 extends \MyCLabs\Enum\Enum
{
    public const WEBDAV = 'WebDAV';

    public const FTP = 'FTP';

    public const FTPS = 'FTPS';

    public const SFTP = 'SFTP';
}

