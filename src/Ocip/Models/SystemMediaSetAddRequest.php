<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetAddRequest
 *
 * Request to add a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12181","type":"sequence"}]
 */
class SystemMediaSetAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName setName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12181
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $setName = null;

    /**
     * @ElementName mediaName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:12181
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $mediaName = [
        
    ];

    /**
     * Getter for setName
     *
     * @return string
     */
    public function getSetName()
    {
        return $this->setName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setName;
    }

    /**
     * Setter for setName
     *
     * @param string $setName
     * @return $this
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetName()
    {
        $this->setName = null;
        return $this;
    }

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

