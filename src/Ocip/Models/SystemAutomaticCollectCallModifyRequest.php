<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallModifyRequest
 *
 * Modify system Automatic Collect Call service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:77","type":"sequence"}]
 */
class SystemAutomaticCollectCallModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableAutomaticCollectCall
     * @Type bool
     * @Optional
     * @Group af1b47d7cab3335a81456e64e42371b0:77
     * @var bool|null
     */
    private $enableAutomaticCollectCall = null;

    /**
     * @ElementName enableConnectTone
     * @Type bool
     * @Optional
     * @Group af1b47d7cab3335a81456e64e42371b0:77
     * @var bool|null
     */
    private $enableConnectTone = null;

    /**
     * Getter for enableAutomaticCollectCall
     *
     * @return bool
     */
    public function getEnableAutomaticCollectCall()
    {
        return $this->enableAutomaticCollectCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticCollectCall;
    }

    /**
     * Setter for enableAutomaticCollectCall
     *
     * @param bool $enableAutomaticCollectCall
     * @return $this
     */
    public function setEnableAutomaticCollectCall($enableAutomaticCollectCall)
    {
        $this->enableAutomaticCollectCall = $enableAutomaticCollectCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticCollectCall()
    {
        $this->enableAutomaticCollectCall = null;
        return $this;
    }

    /**
     * Getter for enableConnectTone
     *
     * @return bool
     */
    public function getEnableConnectTone()
    {
        return $this->enableConnectTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableConnectTone;
    }

    /**
     * Setter for enableConnectTone
     *
     * @param bool $enableConnectTone
     * @return $this
     */
    public function setEnableConnectTone($enableConnectTone)
    {
        $this->enableConnectTone = $enableConnectTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableConnectTone()
    {
        $this->enableConnectTone = null;
        return $this;
    }


}

