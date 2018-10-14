<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfacePublicIdentityRefreshTaskStartRequest
 *
 * Dispatches a Public Identity refresh task on the local Application Server node
 * for the specified public identity.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserShInterfacePublicIdentityRefreshTaskStartRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName publicUserIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    private $publicUserIdentity = null;

    /**
     * Getter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @return \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity(\CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity $publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }


}

