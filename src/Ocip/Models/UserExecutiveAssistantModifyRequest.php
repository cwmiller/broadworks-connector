<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveAssistantModifyRequest
 *
 * Modify the setting for executive assistant.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserExecutiveAssistantModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableDivert
     * @var bool|null
     */
    private $enableDivert = null;

    /**
     * @ElementName divertToPhoneNumber
     * @var string|null
     */
    private $divertToPhoneNumber = null;

    /**
     * @ElementName optInStatus
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[]
     */
    private $optInStatus = array(
        
    );

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
     * Getter for enableDivert
     *
     * @ElementName enableDivert
     * @return bool|null
     */
    public function getEnableDivert()
    {
        return $this->enableDivert;
    }

    /**
     * Setter for enableDivert
     *
     * @ElementName enableDivert
     * @param bool|null $enableDivert
     * @return $this
     */
    public function setEnableDivert($enableDivert)
    {
        $this->enableDivert = $enableDivert;
        return $this;
    }

    /**
     * Getter for divertToPhoneNumber
     *
     * @ElementName divertToPhoneNumber
     * @return string|null
     */
    public function getDivertToPhoneNumber()
    {
        return $this->divertToPhoneNumber;
    }

    /**
     * Setter for divertToPhoneNumber
     *
     * @ElementName divertToPhoneNumber
     * @param string|null $divertToPhoneNumber
     * @return $this
     */
    public function setDivertToPhoneNumber($divertToPhoneNumber)
    {
        $this->divertToPhoneNumber = $divertToPhoneNumber;
        return $this;
    }

    /**
     * Getter for optInStatus
     *
     * @ElementName optInStatus
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[]
     */
    public function getOptInStatus()
    {
        return $this->optInStatus;
    }

    /**
     * Setter for optInStatus
     *
     * @ElementName optInStatus
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[] $optInStatus
     * @return $this
     */
    public function setOptInStatus(array $optInStatus)
    {
        $this->optInStatus = $optInStatus;
        return $this;
    }

    /**
     * Adder for optInStatus
     *
     * @ElementName optInStatus
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus $optInStatus
     * @return $this
     */
    public function addOptInStatus($optInStatus)
    {
        $this->optInStatus []= $optInStatus;
        return $this;
    }


}

