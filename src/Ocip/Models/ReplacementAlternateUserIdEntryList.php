<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAlternateUserIdEntryList
 *
 * A list of alternate user ids that that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementAlternateUserIdEntryList
{

    /**
     * @ElementName alternateUserId
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    private $alternateUserId = array(
        
    );

    /**
     * Getter for alternateUserId
     *
     * @ElementName alternateUserId
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @ElementName alternateUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[] $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * Adder for alternateUserId
     *
     * @ElementName alternateUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry $alternateUserId
     * @return $this
     */
    public function addAlternateUserId($alternateUserId)
    {
        $this->alternateUserId []= $alternateUserId;
        return $this;
    }


}

