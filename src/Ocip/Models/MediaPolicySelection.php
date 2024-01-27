<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MediaPolicySelection
 *
 * Media Policy Selections.
 *
 * @method static MediaPolicySelection USE_UNCOMPRESSED_CODEC()
 * @method static MediaPolicySelection USE_SUPPORTED_MEDIA_SET()
 * @method static MediaPolicySelection NO_RESTRICTIONS()
 * @EnumValueType string
 */
class MediaPolicySelection extends \MyCLabs\Enum\Enum
{
    public const USE_UNCOMPRESSED_CODEC = 'Use Uncompressed Codec';

    public const USE_SUPPORTED_MEDIA_SET = 'Use Supported Media Set';

    public const NO_RESTRICTIONS = 'No Restrictions';
}

