<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerAddListRequest
 *
 * Add an application controller to Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemRoutePointExternalSystemApplicationControllerAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName applicationController
     * @var string[]
     */
    private $applicationController = array(
        
    );

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

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

