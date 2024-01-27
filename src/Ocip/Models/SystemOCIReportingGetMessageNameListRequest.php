<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetMessageNameListRequest
 *
 * Get a list of restricted messages from a host in the OCI Reporting
 *         Access Control List. 
 *         The response is either a SystemOCIReportingGetMessageNameListResponse or an ErrorResponse.
 *
 * @see SystemOCIReportingGetMessageNameListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13928","type":"sequence"}]
 */
class SystemOCIReportingGetMessageNameListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName netAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13928
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }
}

