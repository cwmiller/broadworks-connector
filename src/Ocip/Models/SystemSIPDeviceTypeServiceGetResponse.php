<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceGetResponse
 *
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 */
class SystemSIPDeviceTypeServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName supportsPolycomPhoneServices
     * @var bool|null
     */
    private $supportsPolycomPhoneServices = null;

    /**
     * Getter for supportsPolycomPhoneServices
     *
     * @ElementName supportsPolycomPhoneServices
     * @return bool|null
     */
    public function getSupportsPolycomPhoneServices()
    {
        return $this->supportsPolycomPhoneServices;
    }

    /**
     * Setter for supportsPolycomPhoneServices
     *
     * @ElementName supportsPolycomPhoneServices
     * @param bool|null $supportsPolycomPhoneServices
     * @return $this
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices)
    {
        $this->supportsPolycomPhoneServices = $supportsPolycomPhoneServices;
        return $this;
    }


}

