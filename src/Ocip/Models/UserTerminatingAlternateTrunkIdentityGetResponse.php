<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityGetResponse
 *
 * Response to UserTerminatingAlternateTrunkIdentityGetRequest.
 *
 * @see UserTerminatingAlternateTrunkIdentityGetRequest
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:3393","type":"sequence"}]
 */
class UserTerminatingAlternateTrunkIdentityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName terminatingTrunkIdentity
     * @Type string
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3393
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

