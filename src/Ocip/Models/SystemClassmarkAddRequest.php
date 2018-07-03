<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkAddRequest
 *
 * Add a Class Mark to system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemClassmarkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName classmark
     * @var string|null
     */
    private $classmark = null;

    /**
     * @ElementName value
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName webDisplayKey
     * @var string|null
     */
    private $webDisplayKey = null;

    /**
     * Getter for classmark
     *
     * @ElementName classmark
     * @return string|null
     */
    public function getClassmark()
    {
        return $this->classmark;
    }

    /**
     * Setter for classmark
     *
     * @ElementName classmark
     * @param string|null $classmark
     * @return $this
     */
    public function setClassmark($classmark)
    {
        $this->classmark = $classmark;
        return $this;
    }

    /**
     * Getter for value
     *
     * @ElementName value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @ElementName value
     * @param string|null $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Getter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @return string|null
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @param string|null $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }


}

