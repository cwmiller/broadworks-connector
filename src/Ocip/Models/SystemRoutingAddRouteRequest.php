<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingAddRouteRequest
 *
 * Request to add a route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14129","type":"sequence"}]
 */
class SystemRoutingAddRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14129
     * @MinLength 1
     * @MaxLength 32
     * @var string|null
     */
    private $routeName = null;

    /**
     * Getter for routeName
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @param string $routeName
     * @return $this
     */
    public function setRouteName($routeName)
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


}

