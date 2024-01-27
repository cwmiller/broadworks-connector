<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringAuthorizationCodeEntry
 *
 * Communication Barring Authorization Code entry.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1476","type":"sequence"}]
 */
class CommunicationBarringAuthorizationCodeEntry
{
    /**
     * @ElementName code
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1476
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1476
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

