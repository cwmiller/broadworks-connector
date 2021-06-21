<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyExportRequest
 *
 * Request to export a device family.
 *         
 *         The response is either a SystemDeviceFamilyExportResponse or an ErrorResponse.
 *
 * @see SystemDeviceFamilyExportResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7418","type":"sequence"}]
 */
class SystemDeviceFamilyExportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7418
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $deviceFamilyName = null;

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


}

