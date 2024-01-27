<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallPrefixDigitsAddListRequest
 *
 * Add a system automatic collect call prefix digits entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:96","type":"sequence"}]
 */
class SystemAutomaticCollectCallPrefixDigitsAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName prefixDigitsEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry
     * @Array
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:96
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry[]
     */
    protected $prefixDigitsEntry = [
        
    ];

    /**
     * Getter for prefixDigitsEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry[]
     */
    public function getPrefixDigitsEntry()
    {
        return $this->prefixDigitsEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigitsEntry;
    }

    /**
     * Setter for prefixDigitsEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry[] $prefixDigitsEntry
     * @return $this
     */
    public function setPrefixDigitsEntry(array $prefixDigitsEntry)
    {
        $this->prefixDigitsEntry = $prefixDigitsEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixDigitsEntry()
    {
        $this->prefixDigitsEntry = null;
        return $this;
    }

    /**
     * Adder for prefixDigitsEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry $prefixDigitsEntry
     * @return $this
     */
    public function addPrefixDigitsEntry($prefixDigitsEntry)
    {
        $this->prefixDigitsEntry[] = $prefixDigitsEntry;
        return $this;
    }
}

