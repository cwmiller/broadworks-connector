<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssignment
 *
 * Criteria for searching for users with Route List feature assignment.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1394","type":"sequence"}]
 */
class SearchCriteriaExactUserRouteListAssignment extends SearchCriteria
{
    /**
     * @ElementName assigned
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1394
     * @var bool|null
     */
    protected $assigned = null;

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

