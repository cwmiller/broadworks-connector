<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDNExtension
 *
 * User's DN and extension. Used in SearchCriteriaComposedOrDnExtension when either a DN 
 *          or an extension can be used as a search criteria.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:5233","type":"sequence"}]
 */
class UserDNExtension
{

    /**
     * @ElementName dn
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5233
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $dn = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5233
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $extension = null;

    /**
     * Getter for dn
     *
     * @return string
     */
    public function getDn()
    {
        return $this->dn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dn;
    }

    /**
     * Setter for dn
     *
     * @param string $dn
     * @return $this
     */
    public function setDn($dn)
    {
        $this->dn = $dn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDn()
    {
        $this->dn = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }


}

