<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementTagSetList
 *
 * A list of tag sets that replaces the previously assigned list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4016","type":"sequence"}]
 */
class ReplacementTagSetList
{

    /**
     * @ElementName tagSet
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4016
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $tagSet = array(
        
    );

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

