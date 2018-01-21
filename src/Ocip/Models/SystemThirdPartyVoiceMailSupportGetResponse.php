<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetResponse
 *
 * Response to SystemThirdPartyVoiceMailSupportGetRequest.
 *         
 *         Replaced by: SystemThirdPartyVoiceMailSupportGetResponse17sp4
 */
class SystemThirdPartyVoiceMailSupportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @var bool|null
     */
    private $overrideAltCallerIdForVMRetrieval = null;

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


}

