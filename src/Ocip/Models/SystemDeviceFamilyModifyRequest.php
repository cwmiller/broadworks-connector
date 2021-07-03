<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyModifyRequest
 *
 * Request to modify a device family.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7593","type":"sequence"}]
 */
class SystemDeviceFamilyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7593
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $deviceFamilyName = null;

    /**
     * @ElementName newDeviceFamilyName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7593
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $newDeviceFamilyName = null;

    /**
     * @ElementName deviceTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceTypeList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7593
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceTypeList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceTypeList = null;

    /**
     * @ElementName tagSetList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementTagSetList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7593
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementTagSetList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagSetList = null;

    /**
     * Getter for deviceFamilyName
     *
     * @return string
     */
    public function getDeviceFamilyName()
    {
        return $this->deviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyName;
    }

    /**
     * Setter for deviceFamilyName
     *
     * @param string $deviceFamilyName
     * @return $this
     */
    public function setDeviceFamilyName($deviceFamilyName)
    {
        $this->deviceFamilyName = $deviceFamilyName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyName()
    {
        $this->deviceFamilyName = null;
        return $this;
    }

    /**
     * Getter for newDeviceFamilyName
     *
     * @return string
     */
    public function getNewDeviceFamilyName()
    {
        return $this->newDeviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDeviceFamilyName;
    }

    /**
     * Setter for newDeviceFamilyName
     *
     * @param string $newDeviceFamilyName
     * @return $this
     */
    public function setNewDeviceFamilyName($newDeviceFamilyName)
    {
        $this->newDeviceFamilyName = $newDeviceFamilyName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDeviceFamilyName()
    {
        $this->newDeviceFamilyName = null;
        return $this;
    }

    /**
     * Getter for deviceTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceTypeList|null
     */
    public function getDeviceTypeList()
    {
        return $this->deviceTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeList;
    }

    /**
     * Setter for deviceTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceTypeList|null $deviceTypeList
     * @return $this
     */
    public function setDeviceTypeList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementDeviceTypeList $deviceTypeList = null)
    {
        if ($deviceTypeList === null) {
            $this->deviceTypeList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceTypeList = $deviceTypeList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeList()
    {
        $this->deviceTypeList = null;
        return $this;
    }

    /**
     * Getter for tagSetList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementTagSetList|null
     */
    public function getTagSetList()
    {
        return $this->tagSetList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetList;
    }

    /**
     * Setter for tagSetList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementTagSetList|null $tagSetList
     * @return $this
     */
    public function setTagSetList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementTagSetList $tagSetList = null)
    {
        if ($tagSetList === null) {
            $this->tagSetList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagSetList = $tagSetList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetList()
    {
        $this->tagSetList = null;
        return $this;
    }


}

