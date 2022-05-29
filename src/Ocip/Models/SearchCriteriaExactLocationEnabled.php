<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactLocationEnabled
 *
 * Criteria for searching for a particular Location enabled state.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1059","type":"sequence"}]
 */
class SearchCriteriaExactLocationEnabled extends SearchCriteria
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:1059
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

