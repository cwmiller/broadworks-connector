<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetResponse17sp4
 *
 * Response to SystemThirdPartyVoiceMailSupportGetRequest17sp4.
 */
class SystemThirdPartyVoiceMailSupportGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @var bool|null
     */
    private $overrideAltCallerIdForVMRetrieval = null;

    /**
     * @ElementName stripDiversionOnVMDestinationRetrieval
     * @var bool|null
     */
    private $stripDiversionOnVMDestinationRetrieval = null;

    /**
     * Getter for overrideAltCallerIdForVMRetrieval
     *
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @return bool|null
     */
    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return $this->overrideAltCallerIdForVMRetrieval;
    }

    /**
     * Setter for overrideAltCallerIdForVMRetrieval
     *
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @param bool|null $overrideAltCallerIdForVMRetrieval
     * @return $this
     */
    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval)
    {
        $this->overrideAltCallerIdForVMRetrieval = $overrideAltCallerIdForVMRetrieval;
        return $this;
    }

    /**
     * Getter for stripDiversionOnVMDestinationRetrieval
     *
     * @ElementName stripDiversionOnVMDestinationRetrieval
     * @return bool|null
     */
    public function getStripDiversionOnVMDestinationRetrieval()
    {
        return $this->stripDiversionOnVMDestinationRetrieval;
    }

    /**
     * Setter for stripDiversionOnVMDestinationRetrieval
     *
     * @ElementName stripDiversionOnVMDestinationRetrieval
     * @param bool|null $stripDiversionOnVMDestinationRetrieval
     * @return $this
     */
    public function setStripDiversionOnVMDestinationRetrieval($stripDiversionOnVMDestinationRetrieval)
    {
        $this->stripDiversionOnVMDestinationRetrieval = $stripDiversionOnVMDestinationRetrieval;
        return $this;
    }


}

