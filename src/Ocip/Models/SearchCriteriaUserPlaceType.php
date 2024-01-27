<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaUserPlaceType
 *
 * Criteria for searching based on a user type – “User” or “Place”.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:2412","type":"sequence"}]
 */
class SearchCriteriaUserPlaceType extends SearchCriteria
{
    /**
     * @ElementName value
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType
     * @Group 972fbf832439609ec8f2765c5637c3f1:2412
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPlaceType|null
     */
    protected $value = null;

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

