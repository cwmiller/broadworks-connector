<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDnAvailability
 *
 * Criteria for searching for a particular dn availability.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:895","type":"sequence"}]
 */
class SearchCriteriaExactDnAvailability extends SearchCriteria
{

    /**
     * @ElementName available
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:895
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

