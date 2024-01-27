<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBargeInExemptGetResponse
 *
 * Response to UserBargeInExemptGetRequest.
 *
 * @see UserBargeInExemptGetRequest
 * @Groups [{"id":"0d9b3d8688162f1e9a9cae6f58ab8f13:57","type":"sequence"}]
 */
class UserBargeInExemptGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 0d9b3d8688162f1e9a9cae6f58ab8f13:57
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

