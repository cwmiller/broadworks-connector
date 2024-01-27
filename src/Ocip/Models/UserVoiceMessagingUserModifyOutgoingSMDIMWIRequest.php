<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest
 *
 * Modify the user's voice messaging outgoing message waiting indicator service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2059","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2059
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2059
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName outgoingSMDIMWIPhoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2059
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outgoingSMDIMWIPhoneNumberList = null;

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
     * Getter for outgoingSMDIMWIPhoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null
     */
    public function getOutgoingSMDIMWIPhoneNumberList()
    {
        return $this->outgoingSMDIMWIPhoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingSMDIMWIPhoneNumberList;
    }

    /**
     * Setter for outgoingSMDIMWIPhoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null $outgoingSMDIMWIPhoneNumberList
     * @return $this
     */
    public function setOutgoingSMDIMWIPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList = null)
    {
        if ($outgoingSMDIMWIPhoneNumberList === null) {
            $this->outgoingSMDIMWIPhoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outgoingSMDIMWIPhoneNumberList = $outgoingSMDIMWIPhoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingSMDIMWIPhoneNumberList()
    {
        $this->outgoingSMDIMWIPhoneNumberList = null;
        return $this;
    }
}

