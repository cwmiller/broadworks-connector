<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssigned
 *
 * Criteria for searching for users with/without Route List feature assigned.
 */
class SearchCriteriaExactUserRouteListAssigned extends SearchCriteria
{

    /**
     * @ElementName routeListAssigned
     * @var bool|null
     */
    private $routeListAssigned = null;

    /**
     * Getter for routeListAssigned
     *
     * @ElementName routeListAssigned
     * @return bool|null
     */
    public function getRouteListAssigned()
    {
        return $this->routeListAssigned;
    }

    /**
     * Setter for routeListAssigned
     *
     * @ElementName routeListAssigned
     * @param bool|null $routeListAssigned
     * @return $this
     */
    public function setRouteListAssigned($routeListAssigned)
    {
        $this->routeListAssigned = $routeListAssigned;
        return $this;
    }


}

