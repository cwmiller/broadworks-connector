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
 * @ValueType string
 */
class BroadWorksAnywhereCLIDPrompt extends \MyCLabs\Enum\Enum
{

    const ALWAYS_PROMPT = 'Always Prompt';

    const NEVER_PROMPT = 'Never Prompt';

    const PROMPT_WHEN_NOT_AVAILABLE = 'Prompt When Not Available';


}

