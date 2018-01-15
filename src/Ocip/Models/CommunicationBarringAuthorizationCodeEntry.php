<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringAuthorizationCodeEntry
 *
 * Communication Barring Authorization Code entry.
 */
class CommunicationBarringAuthorizationCodeEntry
{

    /**
     * @ElementName code
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for code
     *
     * @ElementName code
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter for code
     *
     * @ElementName code
     * @param string|null $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

