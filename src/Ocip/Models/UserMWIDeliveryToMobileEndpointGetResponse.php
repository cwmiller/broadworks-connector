<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to UserMWIDeliveryToMobileEndpointGetRequest.
 *
 * @see UserMWIDeliveryToMobileEndpointGetRequest
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:367","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:367
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Optional
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:367
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mobilePhoneNumber = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for mobilePhoneNumber
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @param string $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilePhoneNumber()
    {
        $this->mobilePhoneNumber = null;
        return $this;
    }
}

