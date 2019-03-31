<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteListResponse
 *
 * Response to SystemRoutingGetRouteListRequest.
 *
 * @see SystemRoutingGetRouteListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14291","type":"sequence"}]
 */
class SystemRoutingGetRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routeName
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14291
     * @MinLength 1
     * @MaxLength 32
     * @var string[]
     */
    private $routeName = array(
        
    );

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

