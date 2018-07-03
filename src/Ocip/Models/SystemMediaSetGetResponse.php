<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetResponse
 *
 * Response to SystemMediaSetGetRequest.
 *         Returns a list of media names in the set.
 *
 * @see SystemMediaSetGetRequest
 */
class SystemMediaSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

