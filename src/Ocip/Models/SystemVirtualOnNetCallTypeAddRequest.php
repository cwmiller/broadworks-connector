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
 * @Groups [{"id":"179b744b0183abe614e8c32c17c96b7e:247","type":"sequence"}]
 */
class SystemVirtualOnNetCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:247
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * @ElementName virtualOnNetCallTypeCdrValue
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:247
     * @var string|null
     */
    private $virtualOnNetCallTypeCdrValue = null;

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @return string
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @param string $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallTypeName()
    {
        $this->virtualOnNetCallTypeName = null;
        return $this;
    }

    /**
     * Getter for virtualOnNetCallTypeCdrValue
     *
     * @return string
     */
    public function getVirtualOnNetCallTypeCdrValue()
    {
        return $this->virtualOnNetCallTypeCdrValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeCdrValue;
    }

    /**
     * Setter for virtualOnNetCallTypeCdrValue
     *
     * @param string $virtualOnNetCallTypeCdrValue
     * @return $this
     */
    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue)
    {
        $this->virtualOnNetCallTypeCdrValue = $virtualOnNetCallTypeCdrValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallTypeCdrValue()
    {
        $this->virtualOnNetCallTypeCdrValue = null;
        return $this;
    }


}

