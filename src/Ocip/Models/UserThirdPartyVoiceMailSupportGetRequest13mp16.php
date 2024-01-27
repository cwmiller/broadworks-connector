<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserThirdPartyVoiceMailSupportGetRequest13mp16
 *
 * Request the user level data associated with Third-Party Voice Mail Support.
 *         The response is either a UserThirdPartyVoiceMailSupportGetResponse13mp16 or an
 *         ErrorResponse.
 *         Replaced by: UserThirdPartyVoiceMailSupportGetRequest17
 *
 * @see UserThirdPartyVoiceMailSupportGetResponse13mp16
 * @see ErrorResponse
 * @see UserThirdPartyVoiceMailSupportGetRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47544","type":"sequence"}]
 */
class UserThirdPartyVoiceMailSupportGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47544
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

