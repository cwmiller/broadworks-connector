<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetResponse
 *
 * Response to SystemMediaSetGetRequest.
 *         Returns a list of media names in the set.
 *
 * @see SystemMediaSetGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12259","type":"sequence"}]
 */
class SystemMediaSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:12259
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $mediaName = [
        
    ];

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

