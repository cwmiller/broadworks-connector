<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeModifyRequest
 *
 * Modify the user level data associated with Advice of Charge.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9975efc7f5883a0595f811ee72ba4df5:321","type":"sequence"}]
 */
class UserAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 9975efc7f5883a0595f811ee72ba4df5:321
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 9975efc7f5883a0595f811ee72ba4df5:321
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName aocType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType
     * @Optional
     * @Group 9975efc7f5883a0595f811ee72ba4df5:321
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType|null
     */
    protected $aocType = null;

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
     * Getter for aocType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType
     */
    public function getAocType()
    {
        return $this->aocType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->aocType;
    }

    /**
     * Setter for aocType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType $aocType
     * @return $this
     */
    public function setAocType(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType $aocType)
    {
        $this->aocType = $aocType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAocType()
    {
        $this->aocType = null;
        return $this;
    }
}

