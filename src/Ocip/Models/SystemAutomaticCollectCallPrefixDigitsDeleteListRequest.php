<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallPrefixDigitsDeleteListRequest
 *
 * Delete an entry in system automatic collect call prefix table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:113","type":"sequence"}]
 */
class SystemAutomaticCollectCallPrefixDigitsDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName prefixDigitsEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry
     * @Array
     * @Group af1b47d7cab3335a81456e64e42371b0:113
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCollectCallPrefixDigitsEntry[]
     */
    protected $prefixDigitsEntry = array(
        
    );

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

