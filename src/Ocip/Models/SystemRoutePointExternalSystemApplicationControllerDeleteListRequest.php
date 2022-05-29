<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemApplicationControllerDeleteListRequest
 *
 * Delete an application controller for Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15059","type":"sequence"}]
 */
class SystemRoutePointExternalSystemApplicationControllerDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15059
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
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15059
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $applicationController = array(
        
    );

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

