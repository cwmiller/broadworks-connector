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
     * @var bool|null
     */
    private $available = null;

    /**
     * Getter for available
     *
     * @ElementName available
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Setter for available
     *
     * @ElementName available
     * @param bool|null $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }


}

