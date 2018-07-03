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
 */
class SystemMediaSetAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName setName
     * @var string|null
     */
    private $setName = null;

    /**
     * @ElementName mediaName
     * @var string[]
     */
    private $mediaName = array(
        
    );

    /**
     * Getter for setName
     *
     * @ElementName setName
     * @return string|null
     */
    public function getSetName()
    {
        return $this->setName;
    }

    /**
     * Setter for setName
     *
     * @ElementName setName
     * @param string|null $setName
     * @return $this
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;
        return $this;
    }

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

