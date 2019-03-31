<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointModifyRequest
 *
 * Request to modify the user level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:384","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 958b78cc2a785d78259c1e8a474eb40d:384
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:384
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:384
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobilePhoneNumber = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @param string|null $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        if ($mobilePhoneNumber === null) {
            $this->mobilePhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mobilePhoneNumber = $mobilePhoneNumber;
        }
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

