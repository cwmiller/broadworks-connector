<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeImportRequest
 *
 * Request to import a Device Type Archive File (DTAF) as a new Device Type.  The URL supports the HTTP and the FILE protocols.
 *         When the optional element resellerId is specified, the device type created is at reseller level. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7473","type":"sequence"}]
 */
class SystemDeviceTypeImportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7473
     * @var string|null
     */
    private $file = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7473
     * @var string|null
     */
    private $resellerId = null;

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


}

