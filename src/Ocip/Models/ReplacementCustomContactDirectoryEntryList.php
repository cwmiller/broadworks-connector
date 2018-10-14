<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCustomContactDirectoryEntryList
 *
 * A list of userIds and/or Virtual On-Net user DNs that replaces a previously
 * configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementCustomContactDirectoryEntryList
{

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry[] $entry
     * @return $this
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CustomContactDirectoryEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}

