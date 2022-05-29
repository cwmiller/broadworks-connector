<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingModifyRequest
 *
 * Modify the user level data associated with Two Stage Dialing.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2a1428f64736d8f970ea802e5a73c495:163","type":"sequence"}]
 */
class UserTwoStageDialingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2a1428f64736d8f970ea802e5a73c495:163
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 2a1428f64736d8f970ea802e5a73c495:163
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName allowActivationWithUserAddresses
     * @Type bool
     * @Optional
     * @Group 2a1428f64736d8f970ea802e5a73c495:163
     * @var bool|null
     */
    protected $allowActivationWithUserAddresses = null;

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
     * Getter for allowActivationWithUserAddresses
     *
     * @return bool
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowActivationWithUserAddresses;
    }

    /**
     * Setter for allowActivationWithUserAddresses
     *
     * @param bool $allowActivationWithUserAddresses
     * @return $this
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses)
    {
        $this->allowActivationWithUserAddresses = $allowActivationWithUserAddresses;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowActivationWithUserAddresses()
    {
        $this->allowActivationWithUserAddresses = null;
        return $this;
    }


}

