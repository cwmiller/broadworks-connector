<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeServiceGetResponse
 *
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 *
 * @see SystemSIPDeviceTypeServiceGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17672","type":"sequence"}]
 */
class SystemSIPDeviceTypeServiceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName supportsPolycomPhoneServices
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:17672
     * @var bool|null
     */
    protected $supportsPolycomPhoneServices = null;

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

