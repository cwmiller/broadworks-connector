<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementTagSetList
 *
 * A list of tag sets that replaces the previously assigned list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4505","type":"sequence"}]
 */
class ReplacementTagSetList
{
    /**
     * @ElementName tagSet
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4505
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $tagSet = [
        
    ];

    /**
     * Getter for tagSet
     *
     * @return string[]
     */
    public function getTagSet()
    {
        return $this->tagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSet;
    }

    /**
     * Setter for tagSet
     *
     * @param string[] $tagSet
     * @return $this
     */
    public function setTagSet(array $tagSet)
    {
        $this->tagSet = $tagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSet()
    {
        $this->tagSet = null;
        return $this;
    }

    /**
     * Adder for tagSet
     *
     * @param string $tagSet
     * @return $this
     */
    public function addTagSet(string $tagSet)
    {
        $this->tagSet[] = $tagSet;
        return $this;
    }
}

