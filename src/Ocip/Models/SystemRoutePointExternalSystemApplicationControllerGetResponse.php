<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerGetResponse
 *
 * Response to the SystemRoutePointExternalSystemApplicationControllerGetRequest.
 *
 * @see SystemRoutePointExternalSystemApplicationControllerGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15307","type":"sequence"}]
 */
class SystemRoutePointExternalSystemApplicationControllerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName applicationController
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15307
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $applicationController = [
        
    ];

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

