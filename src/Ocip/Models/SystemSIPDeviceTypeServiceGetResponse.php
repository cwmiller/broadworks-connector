<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceGetResponse
 *
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 *
 * @see SystemSIPDeviceTypeServiceGetRequest
 */
class SystemSIPDeviceTypeServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName supportsPolycomPhoneServices
     * @Type bool
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

