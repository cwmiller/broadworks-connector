<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClientIdentityDeleteRequest
 *
 * Request to delete a client identity.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5458","type":"sequence"}]
 */
class SystemClientIdentityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName clientIdentity
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5458
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $clientIdentity = null;

    /**
     * Getter for clientIdentity
     *
     * @return string
     */
    public function getClientIdentity()
    {
        return $this->clientIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clientIdentity;
    }

    /**
     * Setter for clientIdentity
     *
     * @param string $clientIdentity
     * @return $this
     */
    public function setClientIdentity($clientIdentity)
    {
        $this->clientIdentity = $clientIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClientIdentity()
    {
        $this->clientIdentity = null;
        return $this;
    }
}

