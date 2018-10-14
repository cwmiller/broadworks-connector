<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest
 *
 * Modify the user's voice messaging outgoing message waiting indicator service
 * setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName outgoingSMDIMWIPhoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null
     */
    private $outgoingSMDIMWIPhoneNumberList = null;

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
     * Getter for outgoingSMDIMWIPhoneNumberList
     *
     * @ElementName outgoingSMDIMWIPhoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null
     */
    public function getOutgoingSMDIMWIPhoneNumberList()
    {
        return $this->outgoingSMDIMWIPhoneNumberList;
    }

    /**
     * Setter for outgoingSMDIMWIPhoneNumberList
     *
     * @ElementName outgoingSMDIMWIPhoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null $outgoingSMDIMWIPhoneNumberList
     * @return $this
     */
    public function setOutgoingSMDIMWIPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList)
    {
        $this->outgoingSMDIMWIPhoneNumberList = $outgoingSMDIMWIPhoneNumberList;
        return $this;
    }


}

