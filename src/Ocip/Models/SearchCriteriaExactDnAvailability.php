<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDnAvailability
 *
 * Criteria for searching for a particular dn availability.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1003","type":"sequence"}]
 */
class SearchCriteriaExactDnAvailability extends SearchCriteria
{
    /**
     * @ElementName available
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1003
     * @var bool|null
     */
    protected $available = null;

    /**
     * Getter for available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->available;
    }

    /**
     * Setter for available
     *
     * @param bool $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailable()
    {
        $this->available = null;
        return $this;
    }
}

