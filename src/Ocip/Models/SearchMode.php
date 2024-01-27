<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchMode
 *
 * Search mode when searching for string data.
 *
 * @method static SearchMode STARTS_WITH()
 * @method static SearchMode CONTAINS()
 * @method static SearchMode EQUAL_TO()
 * @EnumValueType string
 */
class SearchMode extends \MyCLabs\Enum\Enum
{
    public const STARTS_WITH = 'Starts With';

    public const CONTAINS = 'Contains';

    public const EQUAL_TO = 'Equal To';
}

