<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanAuthorizationCodeGetListResponse
 *
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class UserOutgoingCallingPlanAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codeEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    private $codeEntry = array(
        
    );

    /**
     * Getter for codeEntry
     *
     * @ElementName codeEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }

    /**
     * Setter for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[] $codeEntry
     * @return $this
     */
    public function setCodeEntry($codeEntry)
    {
        $this->codeEntry = $codeEntry;
        return $this;
    }

    /**
     * Adder for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     * @return $this
     */
    public function addCodeEntry($codeEntry)
    {
        $this->codeEntry []= $codeEntry;
        return $this;
    }


}

