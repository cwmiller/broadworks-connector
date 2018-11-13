<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactAutoAttendantType
 *
 * Criteria for searching for a particular auto-attendant type.
 */
class SearchCriteriaExactAutoAttendantType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType|null
     */
    private $type = null;

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

