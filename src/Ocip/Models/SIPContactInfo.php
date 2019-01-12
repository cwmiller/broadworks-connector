<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPContactInfo
 *
 * A SIP Contact info contains the SIP registration Contact and its associated Header path 
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           pathHeader
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3826","type":"sequence"}]
 */
class SIPContactInfo
{

    /**
     * @ElementName sipContact
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3826
     * @var string|null
     */
    private $sipContact = null;

    /**
     * @ElementName pathHeader
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3826
     * @var string|null
     */
    private $pathHeader = null;

    /**
     * Getter for sipContact
     *
     * @return string
     */
    public function getSipContact()
    {
        return $this->sipContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipContact;
    }

    /**
     * Setter for sipContact
     *
     * @param string $sipContact
     * @return $this
     */
    public function setSipContact($sipContact)
    {
        $this->sipContact = $sipContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipContact()
    {
        $this->sipContact = null;
        return $this;
    }

    /**
     * Getter for pathHeader
     *
     * @return string
     */
    public function getPathHeader()
    {
        return $this->pathHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pathHeader;
    }

    /**
     * Setter for pathHeader
     *
     * @param string $pathHeader
     * @return $this
     */
    public function setPathHeader($pathHeader)
    {
        $this->pathHeader = $pathHeader;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPathHeader()
    {
        $this->pathHeader = null;
        return $this;
    }


}

