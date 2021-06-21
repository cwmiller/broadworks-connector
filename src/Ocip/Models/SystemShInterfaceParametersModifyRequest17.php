<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceParametersModifyRequest17
 *
 * Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16425","type":"sequence"}]
 */
class SystemShInterfaceParametersModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName hssRealm
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16425
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hssRealm = null;

    /**
     * @ElementName publicIdentityRefreshDelaySeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16425
     * @MinInclusive 0
     * @MaxInclusive 30
     * @var int|null
     */
    private $publicIdentityRefreshDelaySeconds = null;

    /**
     * Getter for hssRealm
     *
     * @return string|null
     */
    public function getHssRealm()
    {
        return $this->hssRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hssRealm;
    }

    /**
     * Setter for hssRealm
     *
     * @param string|null $hssRealm
     * @return $this
     */
    public function setHssRealm($hssRealm = null)
    {
        if ($hssRealm === null) {
            $this->hssRealm = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hssRealm = $hssRealm;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHssRealm()
    {
        $this->hssRealm = null;
        return $this;
    }

    /**
     * Getter for publicIdentityRefreshDelaySeconds
     *
     * @return int
     */
    public function getPublicIdentityRefreshDelaySeconds()
    {
        return $this->publicIdentityRefreshDelaySeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicIdentityRefreshDelaySeconds;
    }

    /**
     * Setter for publicIdentityRefreshDelaySeconds
     *
     * @param int $publicIdentityRefreshDelaySeconds
     * @return $this
     */
    public function setPublicIdentityRefreshDelaySeconds($publicIdentityRefreshDelaySeconds)
    {
        $this->publicIdentityRefreshDelaySeconds = $publicIdentityRefreshDelaySeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicIdentityRefreshDelaySeconds()
    {
        $this->publicIdentityRefreshDelaySeconds = null;
        return $this;
    }


}

