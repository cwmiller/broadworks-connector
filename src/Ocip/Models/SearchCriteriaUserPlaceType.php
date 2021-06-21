<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaUserPlaceType
 *
 * Criteria for searching based on a user type – “User” or “Place”.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:2397","type":"sequence"}]
 */
class SearchCriteriaUserPlaceType extends SearchCriteria
{

    /**
     * @ElementName value
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType
     * @Group f0ada2681ca347fa83b464734259b304:2397
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType|null
     */
    private $value = null;

    /**
     * Getter for value
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType $value
     * @return $this
     */
    public function setValue(\CWM\BroadWorksConnector\Ocip\Models\UserPlaceType $value)
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

