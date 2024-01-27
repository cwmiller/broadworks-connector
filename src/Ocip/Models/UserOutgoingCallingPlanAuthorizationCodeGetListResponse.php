<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanAuthorizationCodeGetListResponse
 *
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetListRequest.
 *
 * @see UserOutgoingCallingPlanAuthorizationCodeGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1067","type":"sequence"}]
 */
class UserOutgoingCallingPlanAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName codeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:1067
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    protected $codeEntry = [
        
    ];

    /**
     * Getter for codeEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    public function getCodeEntry()
    {
        return $this->codeEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codeEntry;
    }

    /**
     * Setter for codeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[] $codeEntry
     * @return $this
     */
    public function setCodeEntry(array $codeEntry)
    {
        $this->codeEntry = $codeEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodeEntry()
    {
        $this->codeEntry = null;
        return $this;
    }

    /**
     * Adder for codeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     * @return $this
     */
    public function addCodeEntry($codeEntry)
    {
        $this->codeEntry[] = $codeEntry;
        return $this;
    }
}

