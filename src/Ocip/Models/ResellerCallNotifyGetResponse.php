<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallNotifyGetResponse
 *
 * Response to ResellerCallNotifyGetRequest.
 *
 * @see ResellerCallNotifyGetRequest
 * @Groups [{"id":"ec1be3ca6e990aac87b6fcf39d5e3445:65","type":"sequence"}]
 */
class ResellerCallNotifyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:65
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

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

