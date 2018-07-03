<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteListResponse
 *
 * Response to SystemRoutingGetRouteListRequest.
 *
 * @see SystemRoutingGetRouteListRequest
 */
class SystemRoutingGetRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routeName
     * @var string[]
     */
    private $routeName = array(
        
    );

    /**
     * Getter for routeName
     *
     * @ElementName routeName
     * @return string[]
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @ElementName routeName
     * @param string[] $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * Adder for routeName
     *
     * @ElementName routeName
     * @param string $routeName
     * @return $this
     */
    public function addRouteName($routeName)
    {
        $this->routeName []= $routeName;
        return $this;
    }


}

