<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceGetResponse
 *
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 *
 * @see SystemSIPDeviceTypeServiceGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15712","type":"sequence"}]
 */
class SystemSIPDeviceTypeServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName supportsPolycomPhoneServices
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15712
     * @var bool|null
     */
    private $supportsPolycomPhoneServices = null;

    /**
     * Getter for supportsPolycomPhoneServices
     *
     * @return bool
     */
    public function getSupportsPolycomPhoneServices()
    {
        return $this->supportsPolycomPhoneServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsPolycomPhoneServices;
    }

    /**
     * Setter for supportsPolycomPhoneServices
     *
     * @param bool $supportsPolycomPhoneServices
     * @return $this
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices)
    {
        $this->supportsPolycomPhoneServices = $supportsPolycomPhoneServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsPolycomPhoneServices()
    {
        $this->supportsPolycomPhoneServices = null;
        return $this;
    }


}

