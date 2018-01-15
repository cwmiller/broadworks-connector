<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetListResponse
 *
 * Response to SystemMediaSetGetRequest.
 */
class SystemMediaSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaSetName
     * @var string[]
     */
    private $mediaSetName = array(
        
    );

    /**
     * Getter for mediaSetName
     *
     * @ElementName mediaSetName
     * @return string[]
     */
    public function getMediaSetName()
    {
        return $this->mediaSetName;
    }

    /**
     * Setter for mediaSetName
     *
     * @ElementName mediaSetName
     * @param string[] $mediaSetName
     * @return $this
     */
    public function setMediaSetName($mediaSetName)
    {
        $this->mediaSetName = $mediaSetName;
        return $this;
    }

    /**
     * Adder for mediaSetName
     *
     * @ElementName mediaSetName
     * @param string $mediaSetName
     * @return $this
     */
    public function addMediaSetName($mediaSetName)
    {
        $this->mediaSetName []= $mediaSetName;
        return $this;
    }


}

