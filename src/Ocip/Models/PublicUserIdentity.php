<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PublicUserIdentity
 *
 * Public User Identity
 */
class PublicUserIdentity
{

    /**
     * @ElementName sipURI
     * @var string|null
     */
    private $sipURI = null;

    /**
     * @ElementName telURI
     * @var string|null
     */
    private $telURI = null;

    /**
     * Getter for sipURI
     *
     * @ElementName sipURI
     * @return string|null
     */
    public function getSipURI()
    {
        return $this->sipURI;
    }

    /**
     * Setter for sipURI
     *
     * @ElementName sipURI
     * @param string|null $sipURI
     * @return $this
     */
    public function setSipURI($sipURI)
    {
        $this->sipURI = $sipURI;
        return $this;
    }

    /**
     * Getter for telURI
     *
     * @ElementName telURI
     * @return string|null
     */
    public function getTelURI()
    {
        return $this->telURI;
    }

    /**
     * Setter for telURI
     *
     * @ElementName telURI
     * @param string|null $telURI
     * @return $this
     */
    public function setTelURI($telURI)
    {
        $this->telURI = $telURI;
        return $this;
    }


}

