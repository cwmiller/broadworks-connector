<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactLocationEnabled
 *
 * Criteria for searching for a particular Location enabled state.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1093","type":"sequence"}]
 */
class SearchCriteriaExactLocationEnabled extends SearchCriteria
{
    /**
     * @ElementName enabled
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1093
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }
}

