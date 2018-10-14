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
 * @ValueType string
 */
class SignalingAddressType extends \MyCLabs\Enum\Enum
{

    const NON_INTELLIGENT_DEVICE_ADDRESSING = 'Non-intelligent Device Addressing';

    const NON_INTELLIGENT_PROXY_ADDRESSING = 'Non-intelligent Proxy Addressing';

    const INTELLIGENT_DEVICE_ADDRESSING = 'Intelligent Device Addressing';

    const INTELLIGENT_PROXY_ADDRESSING = 'Intelligent Proxy Addressing';


}

