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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15258","type":"sequence"}]
 */
class SystemRoutePointExternalSystemApplicationControllerAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:15258
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName applicationController
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15258
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $applicationController = [
        
    ];

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

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

