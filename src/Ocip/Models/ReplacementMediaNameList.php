<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementMediaNameList
 *
 * A list of media that replaces a previously configured list.
 */
class ReplacementMediaNameList
{

    /**
     * @ElementName mediaName
     * @var string[]
     */
    private $mediaName = array(
        
    );

    /**
     * Getter for mediaName
     *
     * @ElementName mediaName
     * @return string[]
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @ElementName mediaName
     * @param string[] $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * Adder for mediaName
     *
     * @ElementName mediaName
     * @param string $mediaName
     * @return $this
     */
    public function addMediaName($mediaName)
    {
        $this->mediaName []= $mediaName;
        return $this;
    }


}

