<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksAnywhereCLIDPrompt
 *
 * BroadWorks Anywhere Prompt for CLID options.
 *
 * @method static BroadWorksAnywhereCLIDPrompt ALWAYS_PROMPT()
 * @method static BroadWorksAnywhereCLIDPrompt NEVER_PROMPT()
 * @method static BroadWorksAnywhereCLIDPrompt PROMPT_WHEN_NOT_AVAILABLE()
 * @EnumValueType string
 */
class BroadWorksAnywhereCLIDPrompt extends \MyCLabs\Enum\Enum
{
    public const ALWAYS_PROMPT = 'Always Prompt';

    public const NEVER_PROMPT = 'Never Prompt';

    public const PROMPT_WHEN_NOT_AVAILABLE = 'Prompt When Not Available';
}

