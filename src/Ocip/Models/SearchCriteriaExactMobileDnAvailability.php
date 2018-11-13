<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileDnAvailability
 *
 * Criteria for searching for a particular mobile dn availability.
 */
class SearchCriteriaExactMobileDnAvailability extends SearchCriteria
{

    /**
     * @ElementName available
     * @Type bool
     * @var bool|null
     */
    private $available = null;

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

