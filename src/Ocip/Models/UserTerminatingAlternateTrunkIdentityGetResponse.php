<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityGetResponse
 *
 * Response to UserTerminatingAlternateTrunkIdentityGetRequest.
 *
 * @see UserTerminatingAlternateTrunkIdentityGetRequest
 */
class UserTerminatingAlternateTrunkIdentityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName terminatingTrunkIdentity
     * @Type string
     * @var string|null
     */
    private $terminatingTrunkIdentity = null;

    /**
     * Getter for terminatingTrunkIdentity
     *
     * @return string
     */
    public function getTerminatingTrunkIdentity()
    {
        return $this->terminatingTrunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingTrunkIdentity;
    }

    /**
     * Setter for terminatingTrunkIdentity
     *
     * @param string $terminatingTrunkIdentity
     * @return $this
     */
    public function setTerminatingTrunkIdentity($terminatingTrunkIdentity)
    {
        $this->terminatingTrunkIdentity = $terminatingTrunkIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatingTrunkIdentity()
    {
        $this->terminatingTrunkIdentity = null;
        return $this;
    }


}

