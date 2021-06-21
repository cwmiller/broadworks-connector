<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ActivatableDN
 *
 * Activatable directory Number in E164 Format.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:550","type":"sequence"}]
 */
class ActivatableDN
{

    /**
     * @ElementName DN
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:550
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $DN = null;

    /**
     * @ElementName activate
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:550
     * @var bool|null
     */
    private $activate = null;

    /**
     * Getter for DN
     *
     * @return string
     */
    public function getDN()
    {
        return $this->DN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->DN;
    }

    /**
     * Setter for DN
     *
     * @param string $DN
     * @return $this
     */
    public function setDN($DN)
    {
        $this->DN = $DN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDN()
    {
        $this->DN = null;
        return $this;
    }

    /**
     * Getter for activate
     *
     * @return bool
     */
    public function getActivate()
    {
        return $this->activate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activate;
    }

    /**
     * Setter for activate
     *
     * @param bool $activate
     * @return $this
     */
    public function setActivate($activate)
    {
        $this->activate = $activate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivate()
    {
        $this->activate = null;
        return $this;
    }


}

