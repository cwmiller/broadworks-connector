<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserThirdPartyVoiceMailSupportGetRequest13mp16
 *
 * Request the user level data associated with Third-Party Voice Mail Support.
 *         The response is either a UserThirdPartyVoiceMailSupportGetResponse13mp16
 * or an
 *         ErrorResponse.
 *         Replaced by: UserThirdPartyVoiceMailSupportGetRequest17
 *
 * @see UserThirdPartyVoiceMailSupportGetResponse13
 * @see ErrorResponse
 * @see UserThirdPartyVoiceMailSupportGetRequest17
 */
class UserThirdPartyVoiceMailSupportGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

