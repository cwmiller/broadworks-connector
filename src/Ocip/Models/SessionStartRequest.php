<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionStartRequest
 *
 * SessionStartRequest is sent when a CLI user logs in. This request is not for OCI
 * use.
 *           Possible login schemes:
 *             User id and password, no login token = Normal login .
 *             
 *           Replaced by SessionStartRequest22 in AS data mode.
 *
 * @see SessionStartRequest
 * @see SessionStartRequest22
 */
class SessionStartRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName normalLogin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequestNormalLogin
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequestNormalLogin|null
     */
    private $normalLogin = null;

    /**
     * Getter for normalLogin
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequestNormalLogin
     */
    public function getNormalLogin()
    {
        return $this->normalLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->normalLogin;
    }

    /**
     * Setter for normalLogin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequestNormalLogin $normalLogin
     * @return $this
     */
    public function setNormalLogin(\CWM\BroadWorksConnector\Ocip\Models\SessionStartRequestNormalLogin $normalLogin)
    {
        $this->normalLogin = $normalLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNormalLogin()
    {
        $this->normalLogin = null;
        return $this;
    }


}

