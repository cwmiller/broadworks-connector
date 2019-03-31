<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInventoryReportGetResponse
 *
 * Response to SystemInventoryReportGetRequest.
 *
 * @see SystemInventoryReportGetRequest
 * @Groups [{"id":"5c0fc3a03773b4f430e938115770c82d:94","type":"sequence"}]
 */
class SystemInventoryReportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 5c0fc3a03773b4f430e938115770c82d:94
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }


}

