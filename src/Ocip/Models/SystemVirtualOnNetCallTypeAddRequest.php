<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVirtualOnNetCallTypeAddRequest
 *
 * Add a Virtual On-Net Call Type.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemVirtualOnNetCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * @ElementName virtualOnNetCallTypeCdrValue
     * @var string|null
     */
    private $virtualOnNetCallTypeCdrValue = null;

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @return string|null
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @param string|null $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }

    /**
     * Getter for virtualOnNetCallTypeCdrValue
     *
     * @ElementName virtualOnNetCallTypeCdrValue
     * @return string|null
     */
    public function getVirtualOnNetCallTypeCdrValue()
    {
        return $this->virtualOnNetCallTypeCdrValue;
    }

    /**
     * Setter for virtualOnNetCallTypeCdrValue
     *
     * @ElementName virtualOnNetCallTypeCdrValue
     * @param string|null $virtualOnNetCallTypeCdrValue
     * @return $this
     */
    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue)
    {
        $this->virtualOnNetCallTypeCdrValue = $virtualOnNetCallTypeCdrValue;
        return $this;
    }


}

