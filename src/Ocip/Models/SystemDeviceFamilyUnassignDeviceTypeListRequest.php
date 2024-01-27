<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyUnassignDeviceTypeListRequest
 *
 * Request to unassign a list of Device Types to a device family. Device family name 
 *         should be unique through out the system including all the reseller level device families.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7729","type":"sequence"}]
 */
class SystemDeviceFamilyUnassignDeviceTypeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7729
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $deviceFamilyName = null;

    /**
     * @ElementName deviceTypeName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7729
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceTypeName = [
        
    ];

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
     * Getter for deviceTypeName
     *
     * @return string[]
     */
    public function getDeviceTypeName()
    {
        return $this->deviceTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeName;
    }

    /**
     * Setter for deviceTypeName
     *
     * @param string[] $deviceTypeName
     * @return $this
     */
    public function setDeviceTypeName(array $deviceTypeName)
    {
        $this->deviceTypeName = $deviceTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeName()
    {
        $this->deviceTypeName = null;
        return $this;
    }

    /**
     * Adder for deviceTypeName
     *
     * @param string $deviceTypeName
     * @return $this
     */
    public function addDeviceTypeName(string $deviceTypeName)
    {
        $this->deviceTypeName[] = $deviceTypeName;
        return $this;
    }
}

