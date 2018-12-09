<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementMediaNameList
 *
 * A list of media that replaces a previously configured list.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17491","type":"sequence"}]
 */
class ReplacementMediaNameList
{

    /**
     * @ElementName mediaName
     * @Type string
     * @Array
     * @Group b5f5416d9e71f8e4246cda16c4723744:17491
     * @var string[]
     */
    private $mediaName = array(
        
    );

    /**
     * Getter for mediaName
     *
     * @return string[]
     */
    public function getMediaName()
    {
        return $this->mediaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @param string[] $mediaName
     * @return $this
     */
    public function setMediaName(array $mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaName()
    {
        $this->mediaName = null;
        return $this;
    }

    /**
     * Adder for mediaName
     *
     * @param string $mediaName
     * @return $this
     */
    public function addMediaName(string $mediaName)
    {
        $this->mediaName[] = $mediaName;
        return $this;
    }


}

