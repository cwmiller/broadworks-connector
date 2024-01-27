<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationModifyRequestPassword
 *
 * @Groups [{"id":"6e41c53467939072d1190f1f854fdccd:80","type":"sequence"}]
 */
class UserAuthenticationModifyRequestPassword
{
    /**
     * @ElementName old
     * @Type string
     * @Group 6e41c53467939072d1190f1f854fdccd:80
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $old = null;

    /**
     * @ElementName new
     * @Type string
     * @Group 6e41c53467939072d1190f1f854fdccd:80
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $new = null;

    /**
     * Getter for old
     *
     * @return string
     */
    public function getOld()
    {
        return $this->old instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->old;
    }

    /**
     * Setter for old
     *
     * @param string $old
     * @return $this
     */
    public function setOld($old)
    {
        $this->old = $old;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOld()
    {
        $this->old = null;
        return $this;
    }

    /**
     * Getter for new
     *
     * @return string
     */
    public function getNew()
    {
        return $this->new instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->new;
    }

    /**
     * Setter for new
     *
     * @param string $new
     * @return $this
     */
    public function setNew($new)
    {
        $this->new = $new;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNew()
    {
        $this->new = null;
        return $this;
    }
}

