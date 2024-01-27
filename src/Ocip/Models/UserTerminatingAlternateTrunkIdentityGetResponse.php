<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityGetResponse
 *
 * Response to UserTerminatingAlternateTrunkIdentityGetRequest.
 *
 * @see UserTerminatingAlternateTrunkIdentityGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4086","type":"sequence"}]
 */
class UserTerminatingAlternateTrunkIdentityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName terminatingTrunkIdentity
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4086
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $terminatingTrunkIdentity = null;

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

