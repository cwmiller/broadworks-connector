<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMobileAppRegistrationDeleteRequest
 *
 * Request to remove a Mobile App registration.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2527","type":"sequence"}]
 */
class UserMobileAppRegistrationDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName registrationId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2527
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $registrationId = null;

    /**
     * Getter for registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @param string $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationId()
    {
        $this->registrationId = null;
        return $this;
    }
}

