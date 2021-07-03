<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyImportRequest
 *
 * Request to import a Device Family Set Archive File (DFAF) as a new Device Family.  The URL supports the HTTP and the FILE protocols.
 *         When the optional element resellerId is specified, the device type created is at reseller level.
 *         When the optional element deviceFamilyOverride is set to true, an existing device family with the same name on the destination system will be overridden.
 *         When the optional element tagSetOverride is set to true, any existing tag set on the destination system will be overridden.     
 *         When the optional element deviceTypeFileUpdate is set, on import, for any existing device type associated with the device family, the files that are matched based on the file format are updated with the ones from the DTAF. The file format and the file category are the only attributes that can't be updated.    
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7573","type":"sequence"}]
 */
class SystemDeviceFamilyImportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7573
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $file = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7573
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName deviceFamilyOverride
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7573
     * @var bool|null
     */
    private $deviceFamilyOverride = null;

    /**
     * @ElementName tagSetOverride
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7573
     * @var bool|null
     */
    private $tagSetOverride = null;

    /**
     * @ElementName deviceTypeFileUpdate
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7573
     * @var bool|null
     */
    private $deviceTypeFileUpdate = null;

    /**
     * Getter for file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file;
    }

    /**
     * Setter for file
     *
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile()
    {
        $this->file = null;
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
     * Getter for deviceFamilyOverride
     *
     * @return bool
     */
    public function getDeviceFamilyOverride()
    {
        return $this->deviceFamilyOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyOverride;
    }

    /**
     * Setter for deviceFamilyOverride
     *
     * @param bool $deviceFamilyOverride
     * @return $this
     */
    public function setDeviceFamilyOverride($deviceFamilyOverride)
    {
        $this->deviceFamilyOverride = $deviceFamilyOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyOverride()
    {
        $this->deviceFamilyOverride = null;
        return $this;
    }

    /**
     * Getter for tagSetOverride
     *
     * @return bool
     */
    public function getTagSetOverride()
    {
        return $this->tagSetOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetOverride;
    }

    /**
     * Setter for tagSetOverride
     *
     * @param bool $tagSetOverride
     * @return $this
     */
    public function setTagSetOverride($tagSetOverride)
    {
        $this->tagSetOverride = $tagSetOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetOverride()
    {
        $this->tagSetOverride = null;
        return $this;
    }

    /**
     * Getter for deviceTypeFileUpdate
     *
     * @return bool
     */
    public function getDeviceTypeFileUpdate()
    {
        return $this->deviceTypeFileUpdate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeFileUpdate;
    }

    /**
     * Setter for deviceTypeFileUpdate
     *
     * @param bool $deviceTypeFileUpdate
     * @return $this
     */
    public function setDeviceTypeFileUpdate($deviceTypeFileUpdate)
    {
        $this->deviceTypeFileUpdate = $deviceTypeFileUpdate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeFileUpdate()
    {
        $this->deviceTypeFileUpdate = null;
        return $this;
    }


}

