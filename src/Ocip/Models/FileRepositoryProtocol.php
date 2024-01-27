<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocol
 *
 * File repository protocol.
 *
 * @method static FileRepositoryProtocol WEBDAV()
 * @method static FileRepositoryProtocol FTP()
 * @EnumValueType string
 */
class FileRepositoryProtocol extends \MyCLabs\Enum\Enum
{
    public const WEBDAV = 'WebDAV';

    public const FTP = 'FTP';
}

