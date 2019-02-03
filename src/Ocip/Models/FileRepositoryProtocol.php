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

    const WEBDAV = 'WebDAV';

    const FTP = 'FTP';


}

