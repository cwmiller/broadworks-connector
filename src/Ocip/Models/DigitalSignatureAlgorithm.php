<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DigitalSignatureAlgorithm
 *
 * Possible algorithms for digital signatures supported by the provisioning server.
 *
 * @method static DigitalSignatureAlgorithm MD5()
 * @EnumValueType string
 */
class DigitalSignatureAlgorithm extends \MyCLabs\Enum\Enum
{
    public const MD5 = 'MD5';
}

