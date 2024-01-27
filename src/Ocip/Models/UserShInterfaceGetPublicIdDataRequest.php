<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataRequest
 *
 * Returns the Sh non-transparent data stored against a Public User Identity (a SIP URI
 *         or TEL URI).
 *         The response is either a UserShInterfaceGetPublicIdDataResponse or an ErrorResponse.
 *         
 *         Replaced by: UserShInterfaceGetPublicIdDataRequest21sp1.
 *
 * @see UserShInterfaceGetPublicIdDataResponse
 * @see ErrorResponse
 * @see UserShInterfaceGetPublicIdDataRequest21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18833","type":"sequence"}]
 */
class UserShInterfaceGetPublicIdDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName publicUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     * @Group 240b50f54d060859e5e275082fdf49f9:18833
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

