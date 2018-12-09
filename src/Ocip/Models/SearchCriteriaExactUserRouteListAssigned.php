<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserRouteListAssigned
 *
 * Criteria for searching for users with/without Route List feature assigned.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:1158","type":"sequence"}]
 */
class SearchCriteriaExactUserRouteListAssigned extends SearchCriteria
{

    /**
     * @ElementName routeListAssigned
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1158
     * @var bool|null
     */
    private $routeListAssigned = null;

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

