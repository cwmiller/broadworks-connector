<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanGroupAuthorizationCodes
 *
 * Outgoing Calling Plan Authorization Code for the group default.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2003","type":"sequence"}]
 */
class OutgoingCallingPlanGroupAuthorizationCodes
{
    /**
     * @ElementName codeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry
     * @Array
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:2003
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

