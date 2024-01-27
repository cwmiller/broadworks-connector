<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfacePublicIdentityRefreshTaskStartRequest
 *
 * Dispatches a Public Identity refresh task on the local Application Server node for the specified public identity.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4054","type":"sequence"}]
 */
class UserShInterfacePublicIdentityRefreshTaskStartRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName publicUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4054
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    protected $publicUserIdentity = null;

    /**
     * Getter for publicUserIdentity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity(\CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity $publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicUserIdentity()
    {
        $this->publicUserIdentity = null;
        return $this;
    }
}

