<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalModifyRequest
 *
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingPersonalModifyRequest14sp4
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserSimultaneousRingPersonalModifyRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46535","type":"sequence"}]
 */
class UserSimultaneousRingPersonalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46535
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46535
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46535
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName simRingPhoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46535
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $simRingPhoneNumberList = null;

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
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCalls()
    {
        $this->incomingCalls = null;
        return $this;
    }

    /**
     * Getter for simRingPhoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getSimRingPhoneNumberList()
    {
        return $this->simRingPhoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simRingPhoneNumberList;
    }

    /**
     * Setter for simRingPhoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $simRingPhoneNumberList
     * @return $this
     */
    public function setSimRingPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList = null)
    {
        if ($simRingPhoneNumberList === null) {
            $this->simRingPhoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->simRingPhoneNumberList = $simRingPhoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimRingPhoneNumberList()
    {
        $this->simRingPhoneNumberList = null;
        return $this;
    }


}

