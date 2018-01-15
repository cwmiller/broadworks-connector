<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssignment
 *
 * Criteria for searching for users with Route List feature assignment.
 */
class SearchCriteriaExactUserRouteListAssignment extends SearchCriteria
{

    /**
     * @ElementName assigned
     * @var bool|null
     */
    private $assigned = null;

    /**
     * Getter for assigned
     *
     * @ElementName assigned
     * @return bool|null
     */
    public function getAssigned()
    {
        return $this->assigned;
    }

    /**
     * Setter for assigned
     *
     * @ElementName assigned
     * @param bool|null $assigned
     * @return $this
     */
    public function setAssigned($assigned)
    {
        $this->assigned = $assigned;
        return $this;
    }


}

