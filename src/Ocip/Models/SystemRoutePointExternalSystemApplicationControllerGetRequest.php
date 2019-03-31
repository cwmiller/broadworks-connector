<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerGetRequest
 *
 * Get a list of Application Controllers assigned to the Route Point External Systems specified.
 *       The response is either SystemRoutePointExternalSystemApplicationControllerGetResponse or ErrorResponse.
 *
 * @see SystemRoutePointExternalSystemApplicationControllerGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13980","type":"sequence"}]
 */
class SystemRoutePointExternalSystemApplicationControllerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName externalSystem
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13980
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * Getter for externalSystem
     *
     * @return string
     */
    public function getExternalSystem()
    {
        return $this->externalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @param string $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSystem()
    {
        $this->externalSystem = null;
        return $this;
    }


}

