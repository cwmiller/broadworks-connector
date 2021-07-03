<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyAddRequest
 *
 * Request to add a device family.
 *         When the optional element resellerId is specified, the device family created is at reseller level. Device family name 
 *         should be unique throughout the system including all the reseller level device families.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7343","type":"sequence"}]
 */
class SystemDeviceFamilyAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7343
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $deviceFamilyName = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7343
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName assignDeviceType
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7343
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $assignDeviceType = array(
        
    );

    /**
     * @ElementName assignTagSet
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7343
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    private $assignTagSet = array(
        
    );

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
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for assignDeviceType
     *
     * @return string[]
     */
    public function getAssignDeviceType()
    {
        return $this->assignDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignDeviceType;
    }

    /**
     * Setter for assignDeviceType
     *
     * @param string[] $assignDeviceType
     * @return $this
     */
    public function setAssignDeviceType(array $assignDeviceType)
    {
        $this->assignDeviceType = $assignDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignDeviceType()
    {
        $this->assignDeviceType = null;
        return $this;
    }

    /**
     * Adder for assignDeviceType
     *
     * @param string $assignDeviceType
     * @return $this
     */
    public function addAssignDeviceType(string $assignDeviceType)
    {
        $this->assignDeviceType[] = $assignDeviceType;
        return $this;
    }

    /**
     * Getter for assignTagSet
     *
     * @return string[]
     */
    public function getAssignTagSet()
    {
        return $this->assignTagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignTagSet;
    }

    /**
     * Setter for assignTagSet
     *
     * @param string[] $assignTagSet
     * @return $this
     */
    public function setAssignTagSet(array $assignTagSet)
    {
        $this->assignTagSet = $assignTagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignTagSet()
    {
        $this->assignTagSet = null;
        return $this;
    }

    /**
     * Adder for assignTagSet
     *
     * @param string $assignTagSet
     * @return $this
     */
    public function addAssignTagSet(string $assignTagSet)
    {
        $this->assignTagSet[] = $assignTagSet;
        return $this;
    }


}

