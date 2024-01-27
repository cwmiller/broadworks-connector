<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCustomContactDirectoryEntryList
 *
 * A list of userIds and/or Virtual On-Net user DNs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8794","type":"sequence"}]
 */
class ReplacementCustomContactDirectoryEntryList
{
    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:8794
     * @var \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    protected $entry = [
        
    ];

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[] $entry
     * @return $this
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntry()
    {
        $this->entry = null;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }
}

