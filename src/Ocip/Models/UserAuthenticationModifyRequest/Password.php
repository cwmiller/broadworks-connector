<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequest;

/**
 * Password
 */
class Password
{

    /**
     * @ElementName old
     * @var string|null
     */
    private $old = null;

    /**
     * @ElementName new
     * @var string|null
     */
    private $new = null;

    /**
     * Getter for old
     *
     * @ElementName old
     * @return string|null
     */
    public function getOld()
    {
        return $this->old;
    }

    /**
     * Setter for old
     *
     * @ElementName old
     * @param string|null $old
     * @return $this
     */
    public function setOld($old)
    {
        $this->old = $old;
        return $this;
    }

    /**
     * Getter for new
     *
     * @ElementName new
     * @return string|null
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Setter for new
     *
     * @ElementName new
     * @param string|null $new
     * @return $this
     */
    public function setNew($new)
    {
        $this->new = $new;
        return $this;
    }


}

