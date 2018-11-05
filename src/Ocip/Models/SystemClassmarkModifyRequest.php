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
 */
class SystemClassmarkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }


}

