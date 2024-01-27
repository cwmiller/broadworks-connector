<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PublicUserIdentity
 *
 * Public User Identity
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4008","type":"choice"}]
 */
class PublicUserIdentity
{
    /**
     * @ElementName sipURI
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4008
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $sipURI = null;

    /**
     * @ElementName telURI
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4008
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $telURI = null;

    /**
     * Getter for sipURI
     *
     * @return string
     */
    public function getSipURI()
    {
        return $this->sipURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipURI;
    }

    /**
     * Setter for sipURI
     *
     * @param string $sipURI
     * @return $this
     */
    public function setSipURI($sipURI)
    {
        $this->sipURI = $sipURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipURI()
    {
        $this->sipURI = null;
        return $this;
    }

    /**
     * Getter for telURI
     *
     * @return string
     */
    public function getTelURI()
    {
        return $this->telURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->telURI;
    }

    /**
     * Setter for telURI
     *
     * @param string $telURI
     * @return $this
     */
    public function setTelURI($telURI)
    {
        $this->telURI = $telURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTelURI()
    {
        $this->telURI = null;
        return $this;
    }
}

