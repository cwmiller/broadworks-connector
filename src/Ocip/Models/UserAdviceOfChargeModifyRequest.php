<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeModifyRequest
 *
 * Modify the user level data associated with Advice of Charge.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName aocType
     * @var string|null
     */
    private $aocType = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * Getter for aocType
     *
     * @ElementName aocType
     * @return string|null
     */
    public function getAocType()
    {
        return $this->aocType;
    }

    /**
     * Setter for aocType
     *
     * @ElementName aocType
     * @param string|null $aocType
     * @return $this
     */
    public function setAocType($aocType)
    {
        $this->aocType = $aocType;
        return $this;
    }


}

