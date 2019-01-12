<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerGetResponse
 *
 * Response to the SystemRoutePointExternalSystemApplicationControllerGetRequest.
 *
 * @see SystemRoutePointExternalSystemApplicationControllerGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13442","type":"sequence"}]
 */
class SystemRoutePointExternalSystemApplicationControllerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationController
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13442
     * @var string[]
     */
    private $applicationController = array(
        
    );

    /**
     * Getter for applicationController
     *
     * @return string[]
     */
    public function getApplicationController()
    {
        return $this->applicationController instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationController;
    }

    /**
     * Setter for applicationController
     *
     * @param string[] $applicationController
     * @return $this
     */
    public function setApplicationController(array $applicationController)
    {
        $this->applicationController = $applicationController;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationController()
    {
        $this->applicationController = null;
        return $this;
    }

    /**
     * Adder for applicationController
     *
     * @param string $applicationController
     * @return $this
     */
    public function addApplicationController(string $applicationController)
    {
        $this->applicationController[] = $applicationController;
        return $this;
    }


}

