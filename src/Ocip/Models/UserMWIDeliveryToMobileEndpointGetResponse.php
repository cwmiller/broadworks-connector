<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to UserMWIDeliveryToMobileEndpointGetRequest.
 */
class UserMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName mobilePhoneNumber
     * @var string|null
     */
    private $mobilePhoneNumber = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @param string|null $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }


}

