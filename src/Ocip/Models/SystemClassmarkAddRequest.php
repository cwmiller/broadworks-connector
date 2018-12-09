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
 * @Groups [{"id":"cab89edc38c11aa1d780290f00d72d0c:47","type":"sequence"}]
 */
class SystemClassmarkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName classmark
     * @Type string
     * @Group cab89edc38c11aa1d780290f00d72d0c:47
     * @var string|null
     */
    private $classmark = null;

    /**
     * @ElementName value
     * @Type string
     * @Group cab89edc38c11aa1d780290f00d72d0c:47
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName webDisplayKey
     * @Type string
     * @Optional
     * @Group cab89edc38c11aa1d780290f00d72d0c:47
     * @var string|null
     */
    private $webDisplayKey = null;

    /**
     * Getter for classmark
     *
     * @return string
     */
    public function getClassmark()
    {
        return $this->classmark instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->classmark;
    }

    /**
     * Setter for classmark
     *
     * @param string $classmark
     * @return $this
     */
    public function setClassmark($classmark)
    {
        $this->classmark = $classmark;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClassmark()
    {
        $this->classmark = null;
        return $this;
    }

    /**
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }

    /**
     * Getter for webDisplayKey
     *
     * @return string
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @param string $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebDisplayKey()
    {
        $this->webDisplayKey = null;
        return $this;
    }


}

