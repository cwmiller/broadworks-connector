<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaComposedOrDnExtension
 *
 * Criteria for searching for a DN OR an extension.
 *         Note: For this search criterion, the searchMode is always ‘Contains’ and the search criteria are always OR’ed.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:378","type":"sequence"}]
 */
class SearchCriteriaComposedOrDnExtension extends SearchCriteriaComposedOr
{
    /**
     * @ElementName value
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDNExtension
     * @Group 972fbf832439609ec8f2765c5637c3f1:378
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDNExtension|null
     */
    protected $value = null;

    /**
     * Getter for value
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserDNExtension
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserDNExtension $value
     * @return $this
     */
    public function setValue(\CWM\BroadWorksConnector\Ocip\Models\UserDNExtension $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }
}

