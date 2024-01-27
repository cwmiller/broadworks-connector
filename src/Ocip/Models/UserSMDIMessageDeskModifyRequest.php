<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskModifyRequest
 *
 * Modify the user's SMDI Message Desk service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:324","type":"sequence"}]
 */
class UserSMDIMessageDeskModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:324
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group aa3a240fa755015613cfb9259eccafef:324
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName messageDeskNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group aa3a240fa755015613cfb9259eccafef:324
     * @MinLength 1
     * @MaxLength 3
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $messageDeskNumber = null;

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
     * Getter for messageDeskNumber
     *
     * @return string|null
     */
    public function getMessageDeskNumber()
    {
        return $this->messageDeskNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDeskNumber;
    }

    /**
     * Setter for messageDeskNumber
     *
     * @param string|null $messageDeskNumber
     * @return $this
     */
    public function setMessageDeskNumber($messageDeskNumber = null)
    {
        if ($messageDeskNumber === null) {
            $this->messageDeskNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->messageDeskNumber = $messageDeskNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageDeskNumber()
    {
        $this->messageDeskNumber = null;
        return $this;
    }
}

