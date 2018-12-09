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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:37565","type":"sequence"}]
 */
class UserThirdPartyVoiceMailSupportGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:37565
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

