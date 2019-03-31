<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetListResponse
 *
 * Response to SystemMediaSetGetRequest.
 *
 * @see SystemMediaSetGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11064","type":"sequence"}]
 */
class SystemMediaSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaSetName
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11064
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $mediaSetName = array(
        
    );

    /**
     * Getter for mediaSetName
     *
     * @return string[]
     */
    public function getMediaSetName()
    {
        return $this->mediaSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaSetName;
    }

    /**
     * Setter for mediaSetName
     *
     * @param string[] $mediaSetName
     * @return $this
     */
    public function setMediaSetName(array $mediaSetName)
    {
        $this->mediaSetName = $mediaSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaSetName()
    {
        $this->mediaSetName = null;
        return $this;
    }

    /**
     * Adder for mediaSetName
     *
     * @param string $mediaSetName
     * @return $this
     */
    public function addMediaSetName(string $mediaSetName)
    {
        $this->mediaSetName[] = $mediaSetName;
        return $this;
    }


}

