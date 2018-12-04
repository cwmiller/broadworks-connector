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
 * @see SystemThirdPartyVoiceMailSupportGetResponse17sp4
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:28644","type":"sequence"}]
 */
class SystemThirdPartyVoiceMailSupportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAltCallerIdForVMRetrieval
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:28644
     * @var bool|null
     */
    private $overrideAltCallerIdForVMRetrieval = null;

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

