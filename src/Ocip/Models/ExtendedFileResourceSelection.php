<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedFileResourceSelection
 *
 * Choices for extended file resource usage.
 *
 * @method static ExtendedFileResourceSelection FILE()
 * @method static ExtendedFileResourceSelection URL()
 * @method static ExtendedFileResourceSelection _DEFAULT()
 * @EnumValueType string
 */
class ExtendedFileResourceSelection extends \MyCLabs\Enum\Enum
{
    public const FILE = 'File';

    public const URL = 'URL';

    public const _DEFAULT = 'Default';
}

