<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyModifyRequest
 *
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingFamilyModifyRequest14sp4
 */
class UserSimultaneousRingFamilyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName incomingCalls
     * @var string|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName simRingPhoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    private $simRingPhoneNumberList = null;

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
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return string|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param string|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls($incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for simRingPhoneNumberList
     *
     * @ElementName simRingPhoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getSimRingPhoneNumberList()
    {
        return $this->simRingPhoneNumberList;
    }

    /**
     * Setter for simRingPhoneNumberList
     *
     * @ElementName simRingPhoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $simRingPhoneNumberList
     * @return $this
     */
    public function setSimRingPhoneNumberList($simRingPhoneNumberList)
    {
        $this->simRingPhoneNumberList = $simRingPhoneNumberList;
        return $this;
    }


}

