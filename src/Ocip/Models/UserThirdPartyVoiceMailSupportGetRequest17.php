<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserThirdPartyVoiceMailSupportGetRequest17
 *
 * Request the user level data associated with Third-Party Voice Mail Support.
 *         The response is either a UserThirdPartyVoiceMailSupportGetResponse17 or an
 *         ErrorResponse.
 *
 * @see UserThirdPartyVoiceMailSupportGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:242","type":"sequence"}]
 */
class UserThirdPartyVoiceMailSupportGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 21e97b8199c6e7eff29a84874335b46e:242
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

