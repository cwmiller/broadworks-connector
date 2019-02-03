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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5040","type":"sequence"}]
 */
class SystemClientIdentityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName clientIdentity
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5040
     * @var string|null
     */
    private $clientIdentity = null;

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

