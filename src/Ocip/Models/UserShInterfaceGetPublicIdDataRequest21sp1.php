<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataRequest21sp1
 *
 * Returns the Sh non-transparent data stored against a Public User Identity (a SIP URI
 *         or TEL URI).
 *         The response is either a UserShInterfaceGetPublicIdDataResponse21sp1 or an ErrorResponse.
 *
 * @see UserShInterfaceGetPublicIdDataResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3964","type":"sequence"}]
 */
class UserShInterfaceGetPublicIdDataRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName publicUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3964
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

