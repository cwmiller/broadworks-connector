<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDNExtension
 *
 * User's DN and extension. Used in SearchCriteriaComposedOrDnExtension when either a DN 
 *          or an extension can be used as a search criteria.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5698","type":"sequence"}]
 */
class UserDNExtension
{
    /**
     * @ElementName dn
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5698
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $dn = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5698
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    protected $extension = null;

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

