<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAlternateUserIdEntryList
 *
 * A list of alternate user ids that that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2695","type":"sequence"}]
 */
class ReplacementAlternateUserIdEntryList
{

    /**
     * @ElementName alternateUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2695
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    private $alternateUserId = array(
        
    );

    /**
     * Getter for alternateUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[] $alternateUserId
     * @return $this
     */
    public function setAlternateUserId(array $alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserId()
    {
        $this->alternateUserId = null;
        return $this;
    }

    /**
     * Adder for alternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry $alternateUserId
     * @return $this
     */
    public function addAlternateUserId($alternateUserId)
    {
        $this->alternateUserId[] = $alternateUserId;
        return $this;
    }


}

