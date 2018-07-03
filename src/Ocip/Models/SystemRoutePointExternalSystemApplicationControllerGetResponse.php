<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerGetResponse
 *
 * Response to the SystemRoutePointExternalSystemApplicationControllerGetRequest.
 *
 * @see SystemRoutePointExternalSystemApplicationControllerGetRequest
 */
class SystemRoutePointExternalSystemApplicationControllerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationController
     * @var string[]
     */
    private $applicationController = array(
        
    );

    /**
     * Getter for applicationController
     *
     * @ElementName applicationController
     * @return string[]
     */
    public function getApplicationController()
    {
        return $this->applicationController;
    }

    /**
     * Setter for applicationController
     *
     * @ElementName applicationController
     * @param string[] $applicationController
     * @return $this
     */
    public function setApplicationController($applicationController)
    {
        $this->applicationController = $applicationController;
        return $this;
    }

    /**
     * Adder for applicationController
     *
     * @ElementName applicationController
     * @param string $applicationController
     * @return $this
     */
    public function addApplicationController($applicationController)
    {
        $this->applicationController []= $applicationController;
        return $this;
    }


}

