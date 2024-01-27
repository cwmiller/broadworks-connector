<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDBlockingOverrideGetResponse
 *
 * Response to UserCallingLineIDBlockingOverrideGetRequest.
 *
 * @see UserCallingLineIDBlockingOverrideGetRequest
 * @Groups [{"id":"2f311a4894deb89024261851208263ff:59","type":"sequence"}]
 */
class UserCallingLineIDBlockingOverrideGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 2f311a4894deb89024261851208263ff:59
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

