<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameRetrievalGetResponse
 *
 * Response to UserCallingNameRetrievalGetRequest.
 *
 * @see UserCallingNameRetrievalGetRequest
 * @Groups [{"id":"ba51f415ebda0240287c719bc767eadf:149","type":"sequence"}]
 */
class UserCallingNameRetrievalGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group ba51f415ebda0240287c719bc767eadf:149
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }
}

