<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SignalingAddressType
 *
 * Device type signaling address types.
 *
 * @method static SignalingAddressType NON_INTELLIGENT_DEVICE_ADDRESSING()
 * @method static SignalingAddressType NON_INTELLIGENT_PROXY_ADDRESSING()
 * @method static SignalingAddressType INTELLIGENT_DEVICE_ADDRESSING()
 * @method static SignalingAddressType INTELLIGENT_PROXY_ADDRESSING()
 * @EnumValueType string
 */
class SignalingAddressType extends \MyCLabs\Enum\Enum
{
    public const NON_INTELLIGENT_DEVICE_ADDRESSING = 'Non-intelligent Device Addressing';

    public const NON_INTELLIGENT_PROXY_ADDRESSING = 'Non-intelligent Proxy Addressing';

    public const INTELLIGENT_DEVICE_ADDRESSING = 'Intelligent Device Addressing';

    public const INTELLIGENT_PROXY_ADDRESSING = 'Intelligent Proxy Addressing';
}

