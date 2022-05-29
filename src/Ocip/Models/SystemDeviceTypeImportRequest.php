<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeImportRequest
 *
 * Request to import a Device Type Archive File (DTAF) as a new Device Type.  The URL supports the HTTP and the FILE protocols.
 *         When the optional element resellerId is specified, the device type created is at reseller level.
 *         When the optional element deviceTypeRename is set, on import, the device type name part of the DTAF will be changed to the desired name on the destination system.
 *         When the optional element deviceTypeFileUpdate is set, on import, the files that are matched based on the file format are updated with the ones from the DTAF. The file format and the file category are the only attributes that can't be updated. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           deviceTypeFileUpdate
 *           deviceTypeRename
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8857","type":"sequence"}]
 */
class SystemDeviceTypeImportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8857
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $file = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8857
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName deviceTypeRename
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceTypeRename
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8857
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceTypeRename|null
     */
    protected $deviceTypeRename = null;

    /**
     * @ElementName deviceTypeFileUpdate
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8857
     * @var bool|null
     */
    protected $deviceTypeFileUpdate = null;

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
     * Getter for deviceTypeRename
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceTypeRename
     */
    public function getDeviceTypeRename()
    {
        return $this->deviceTypeRename instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeRename;
    }

    /**
     * Setter for deviceTypeRename
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceTypeRename $deviceTypeRename
     * @return $this
     */
    public function setDeviceTypeRename(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceTypeRename $deviceTypeRename)
    {
        $this->deviceTypeRename = $deviceTypeRename;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeRename()
    {
        $this->deviceTypeRename = null;
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

