<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteListResponse
 *
 * Response to SystemRoutingGetRouteListRequest.
 *
 * @see SystemRoutingGetRouteListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15603","type":"sequence"}]
 */
class SystemRoutingGetRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routeName
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15603
     * @MinLength 1
     * @MaxLength 32
     * @var string[]
     */
    protected $routeName = [
        
    ];

    /**
     * Getter for routeName
     *
     * @return string[]
     */
    public function getRouteName()
    {
        return $this->routeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @param string[] $routeName
     * @return $this
     */
    public function setRouteName(array $routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteName()
    {
        $this->routeName = null;
        return $this;
    }

    /**
     * Adder for routeName
     *
     * @param string $routeName
     * @return $this
     */
    public function addRouteName(string $routeName)
    {
        $this->routeName[] = $routeName;
        return $this;
    }
}

