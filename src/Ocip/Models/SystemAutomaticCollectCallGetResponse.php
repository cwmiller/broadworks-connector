<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallGetResponse
 *
 * Response to the SystemAutomaticCollectCallGetRequest.
 *         Returns system Automatic Collect Call service settings.
 *         
 *         Replaced by SystemAutomaticCollectCallGetResponse22 in AS mode.
 *
 * @see SystemAutomaticCollectCallGetRequest
 * @see SystemAutomaticCollectCallGetResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20019","type":"sequence"}]
 */
class SystemAutomaticCollectCallGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableAutomaticCollectCall
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20019
     * @var bool|null
     */
    private $enableAutomaticCollectCall = null;

    /**
     * @ElementName enableConnectTone
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20019
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

