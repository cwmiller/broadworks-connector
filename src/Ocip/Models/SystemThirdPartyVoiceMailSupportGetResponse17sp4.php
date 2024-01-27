<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetResponse17sp4
 *
 * Response to SystemThirdPartyVoiceMailSupportGetRequest17sp4.
 *
 * @see SystemThirdPartyVoiceMailSupportGetRequest17sp4
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:187","type":"sequence"}]
 */
class SystemThirdPartyVoiceMailSupportGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @Type bool
     * @Group 21e97b8199c6e7eff29a84874335b46e:187
     * @var bool|null
     */
    protected $overrideAltCallerIdForVMRetrieval = null;

    /**
     * @ElementName stripDiversionOnVMDestinationRetrieval
     * @Type bool
     * @Group 21e97b8199c6e7eff29a84874335b46e:187
     * @var bool|null
     */
    protected $stripDiversionOnVMDestinationRetrieval = null;

    /**
     * Getter for overrideAltCallerIdForVMRetrieval
     *
     * @return bool
     */
    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return $this->overrideAltCallerIdForVMRetrieval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideAltCallerIdForVMRetrieval;
    }

    /**
     * Setter for overrideAltCallerIdForVMRetrieval
     *
     * @param bool $overrideAltCallerIdForVMRetrieval
     * @return $this
     */
    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval)
    {
        $this->overrideAltCallerIdForVMRetrieval = $overrideAltCallerIdForVMRetrieval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideAltCallerIdForVMRetrieval()
    {
        $this->overrideAltCallerIdForVMRetrieval = null;
        return $this;
    }

    /**
     * Getter for stripDiversionOnVMDestinationRetrieval
     *
     * @return bool
     */
    public function getStripDiversionOnVMDestinationRetrieval()
    {
        return $this->stripDiversionOnVMDestinationRetrieval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stripDiversionOnVMDestinationRetrieval;
    }

    /**
     * Setter for stripDiversionOnVMDestinationRetrieval
     *
     * @param bool $stripDiversionOnVMDestinationRetrieval
     * @return $this
     */
    public function setStripDiversionOnVMDestinationRetrieval($stripDiversionOnVMDestinationRetrieval)
    {
        $this->stripDiversionOnVMDestinationRetrieval = $stripDiversionOnVMDestinationRetrieval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStripDiversionOnVMDestinationRetrieval()
    {
        $this->stripDiversionOnVMDestinationRetrieval = null;
        return $this;
    }
}

