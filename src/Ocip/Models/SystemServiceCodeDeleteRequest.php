<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeDeleteRequest
 *
 * Request to delete a service code for the purpose of providing free format routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16305","type":"sequence"}]
 */
class SystemServiceCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:16305
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceCode = null;

    /**
     * Getter for serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCode()
    {
        $this->serviceCode = null;
        return $this;
    }
}

