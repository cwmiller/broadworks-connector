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
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequest\NormalLogin|null
     */
    private $normalLogin = null;

    /**
     * Getter for normalLogin
     *
     * @ElementName normalLogin
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequest\NormalLogin|null
     */
    public function getNormalLogin()
    {
        return $this->normalLogin;
    }

    /**
     * Setter for normalLogin
     *
     * @ElementName normalLogin
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionStartRequest\NormalLogin|null $normalLogin
     * @return $this
     */
    public function setNormalLogin($normalLogin)
    {
        $this->normalLogin = $normalLogin;
        return $this;
    }


}

