<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPModifyRequest
 *
 * Modifies the Integrated IMP specific service attribute for the user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         If the impId element is set in the request, the impId element does 
 *         not take effect on the service for the user unless the request also 
 *         has the isActive element set to true to turn the service from off 
 *         to on.
 *         If impId is based on an alternate user ID and the impId and userId 
 *         are identical, isAlternateImpId should be set to true to determine 
 *         that impId is the user's alternate ID.
 *         The following elements are only used in AS data mode and ignored in 
 *         XS data mode:
 *           impId
 *           isAlternateImpId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:381","type":"sequence"}]
 */
class UserIntegratedIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:381
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:381
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName impId
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:381
     * @MinLength 1
     * @MaxLength 196
     * @var string|null
     */
    private $impId = null;

    /**
     * @ElementName isAlternateImpId
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:381
     * @var bool|null
     */
    private $isAlternateImpId = null;

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
     * Getter for impId
     *
     * @return string
     */
    public function getImpId()
    {
        return $this->impId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->impId;
    }

    /**
     * Setter for impId
     *
     * @param string $impId
     * @return $this
     */
    public function setImpId($impId)
    {
        $this->impId = $impId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImpId()
    {
        $this->impId = null;
        return $this;
    }

    /**
     * Getter for isAlternateImpId
     *
     * @return bool
     */
    public function getIsAlternateImpId()
    {
        return $this->isAlternateImpId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAlternateImpId;
    }

    /**
     * Setter for isAlternateImpId
     *
     * @param bool $isAlternateImpId
     * @return $this
     */
    public function setIsAlternateImpId($isAlternateImpId)
    {
        $this->isAlternateImpId = $isAlternateImpId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAlternateImpId()
    {
        $this->isAlternateImpId = null;
        return $this;
    }


}

