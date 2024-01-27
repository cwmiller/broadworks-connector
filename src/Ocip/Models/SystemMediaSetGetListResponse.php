<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetListResponse
 *
 * Response to SystemMediaSetGetRequest.
 *
 * @see SystemMediaSetGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12227","type":"sequence"}]
 */
class SystemMediaSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaSetName
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12227
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $mediaSetName = [
        
    ];

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

