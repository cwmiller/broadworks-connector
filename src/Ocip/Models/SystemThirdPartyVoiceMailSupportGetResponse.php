<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetResponse
 *
 * Response to SystemThirdPartyVoiceMailSupportGetRequest.
 *         
 *         Replaced by: SystemThirdPartyVoiceMailSupportGetResponse17sp4
 *
 * @see SystemThirdPartyVoiceMailSupportGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40952","type":"sequence"}]
 */
class SystemThirdPartyVoiceMailSupportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:40952
     * @var bool|null
     */
    protected $overrideAltCallerIdForVMRetrieval = null;

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
}

