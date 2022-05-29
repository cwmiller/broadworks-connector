<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallGetResponse22
 *
 * Response to the SystemAutomaticCollectCallGetRequest22.
 *         Returns system Automatic Collect Call service settings.
 *
 * @see SystemAutomaticCollectCallGetRequest22
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:61","type":"sequence"}]
 */
class SystemAutomaticCollectCallGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableAutomaticCollectCall
     * @Type bool
     * @Group af1b47d7cab3335a81456e64e42371b0:61
     * @var bool|null
     */
    protected $enableAutomaticCollectCall = null;

    /**
     * @ElementName enableConnectTone
     * @Type bool
     * @Group af1b47d7cab3335a81456e64e42371b0:61
     * @var bool|null
     */
    protected $enableConnectTone = null;

    /**
     * @ElementName includeCountryCodeInCic
     * @Type bool
     * @Group af1b47d7cab3335a81456e64e42371b0:61
     * @var bool|null
     */
    protected $includeCountryCodeInCic = null;

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

    /**
     * Getter for includeCountryCodeInCic
     *
     * @return bool
     */
    public function getIncludeCountryCodeInCic()
    {
        return $this->includeCountryCodeInCic instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCountryCodeInCic;
    }

    /**
     * Setter for includeCountryCodeInCic
     *
     * @param bool $includeCountryCodeInCic
     * @return $this
     */
    public function setIncludeCountryCodeInCic($includeCountryCodeInCic)
    {
        $this->includeCountryCodeInCic = $includeCountryCodeInCic;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCountryCodeInCic()
    {
        $this->includeCountryCodeInCic = null;
        return $this;
    }


}

