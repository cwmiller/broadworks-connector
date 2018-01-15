<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportDeleteDnRequest
 *
 * Request to delete a ThirdPartyVoiceMailSupport User DN from the system.
 *        The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemThirdPartyVoiceMailSupportDeleteDnRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

