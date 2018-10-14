<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataRequest
 *
 * Returns the Sh non-transparent data stored against a Public User Identity (a SIP
 * URI
 *         or TEL URI).
 *         The response is either a UserShInterfaceGetPublicIdDataResponse or an
 * ErrorResponse.
 *         
 *         Replaced by: UserShInterfaceGetPublicIdDataRequest21sp1.
 *
 * @see UserShInterfaceGetPublicIdDataResponse
 * @see ErrorResponse
 * @see UserShInterfaceGetPublicIdDataRequest21sp1
 */
class UserShInterfaceGetPublicIdDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

