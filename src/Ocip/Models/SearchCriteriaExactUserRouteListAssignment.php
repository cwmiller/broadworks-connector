<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssignment
 *
 * Criteria for searching for users with Route List feature assignment.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:1173","type":"sequence"}]
 */
class SearchCriteriaExactUserRouteListAssignment extends SearchCriteria
{

    /**
     * @ElementName assigned
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1173
     * @var bool|null
     */
    private $assigned = null;

    /**
     * Getter for assigned
     *
     * @return bool
     */
    public function getAssigned()
    {
        return $this->assigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assigned;
    }

    /**
     * Setter for assigned
     *
     * @param bool $assigned
     * @return $this
     */
    public function setAssigned($assigned)
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssigned()
    {
        $this->assigned = null;
        return $this;
    }


}

