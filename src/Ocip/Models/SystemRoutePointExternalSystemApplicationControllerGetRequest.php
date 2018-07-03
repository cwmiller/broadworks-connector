<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerGetRequest
 *
 * Get a list of Application Controllers assigned to the Route Point External
 * Systems specified.
 *       The response is either
 * SystemRoutePointExternalSystemApplicationControllerGetResponse or ErrorResponse.
 *
 * @see SystemRoutePointExternalSystemApplicationControllerGetResponse
 * @see ErrorResponse
 */
class SystemRoutePointExternalSystemApplicationControllerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName externalSystem
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * Getter for externalSystem
     *
     * @ElementName externalSystem
     * @return string|null
     */
    public function getExternalSystem()
    {
        return $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @ElementName externalSystem
     * @param string|null $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }


}

