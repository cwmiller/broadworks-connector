<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaComposedOrDnExtension
 *
 * Criteria for searching for a DN OR an extension.
 *         Note: For this search criterion, the searchMode is always ‘Contains’ and the search criteria are always OR’ed.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:378","type":"sequence"}]
 */
class SearchCriteriaComposedOrDnExtension extends SearchCriteriaComposedOr
{

    /**
     * @ElementName value
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDNExtension
     * @Group f0ada2681ca347fa83b464734259b304:378
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

