<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkModifyRequest
 *
 * Modify a Class Mark in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"bd23272215266344f26a1702c47ce590:154","type":"sequence"}]
 */
class SystemClassmarkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName classmark
     * @Type string
     * @Group bd23272215266344f26a1702c47ce590:154
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $classmark = null;

    /**
     * @ElementName value
     * @Type string
     * @Optional
     * @Group bd23272215266344f26a1702c47ce590:154
     * @MinLength 1
     * @MaxLength 32
     * @var string|null
     */
    protected $value = null;

    /**
     * @ElementName webDisplayKey
     * @Type string
     * @Nillable
     * @Optional
     * @Group bd23272215266344f26a1702c47ce590:154
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $webDisplayKey = null;

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
     * @return string|null
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @param string|null $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        if ($webDisplayKey === null) {
            $this->webDisplayKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->webDisplayKey = $webDisplayKey;
        }
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

