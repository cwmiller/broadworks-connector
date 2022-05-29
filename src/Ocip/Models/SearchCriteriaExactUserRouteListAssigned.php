<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssigned
 *
 * Criteria for searching for users with/without Route List feature assigned.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1330","type":"sequence"}]
 */
class SearchCriteriaExactUserRouteListAssigned extends SearchCriteria
{

    /**
     * @ElementName routeListAssigned
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:1330
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

