<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssigned
 *
 * Criteria for searching for users with/without Route List feature assigned.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1379","type":"sequence"}]
 */
class SearchCriteriaExactUserRouteListAssigned extends SearchCriteria
{
    /**
     * @ElementName routeListAssigned
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1379
     * @var bool|null
     */
    protected $routeListAssigned = null;

    /**
     * Getter for routeListAssigned
     *
     * @return bool
     */
    public function getRouteListAssigned()
    {
        return $this->routeListAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeListAssigned;
    }

    /**
     * Setter for routeListAssigned
     *
     * @param bool $routeListAssigned
     * @return $this
     */
    public function setRouteListAssigned($routeListAssigned)
    {
        $this->routeListAssigned = $routeListAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteListAssigned()
    {
        $this->routeListAssigned = null;
        return $this;
    }
}

