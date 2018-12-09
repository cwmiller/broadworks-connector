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
 * @Groups [{"id":"978bd59aab7d92332d5c069142e3c8ac:242","type":"sequence"}]
 */
class UserThirdPartyVoiceMailSupportGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 978bd59aab7d92332d5c069142e3c8ac:242
     * @var string|null
     */
    private $userId = null;

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

