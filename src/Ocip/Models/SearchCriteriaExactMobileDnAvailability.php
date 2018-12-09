<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileDnAvailability
 *
 * Criteria for searching for a particular mobile dn availability.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:917","type":"sequence"}]
 */
class SearchCriteriaExactMobileDnAvailability extends SearchCriteria
{

    /**
     * @ElementName available
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:917
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

