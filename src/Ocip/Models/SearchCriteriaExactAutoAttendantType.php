<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactAutoAttendantType
 *
 * Criteria for searching for a particular auto-attendant type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:711","type":"sequence"}]
 */
class SearchCriteriaExactAutoAttendantType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     * @Group f0ada2681ca347fa83b464734259b304:711
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType|null
     */
    protected $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }


}

