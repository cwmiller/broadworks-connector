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
     * @var string|null
     */
    private $terminatingTrunkIdentity = null;

    /**
     * Getter for terminatingTrunkIdentity
     *
     * @ElementName terminatingTrunkIdentity
     * @return string|null
     */
    public function getTerminatingTrunkIdentity()
    {
        return $this->terminatingTrunkIdentity;
    }

    /**
     * Setter for terminatingTrunkIdentity
     *
     * @ElementName terminatingTrunkIdentity
     * @param string|null $terminatingTrunkIdentity
     * @return $this
     */
    public function setTerminatingTrunkIdentity($terminatingTrunkIdentity)
    {
        $this->terminatingTrunkIdentity = $terminatingTrunkIdentity;
        return $this;
    }


}

