<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLegacyAutomaticCallbackGetResponse
 *
 * Response to UserLegacyAutomaticCallbackGetRequest.
 *
 * @see UserLegacyAutomaticCallbackGetRequest
 * @Groups [{"id":"dd4a5e667a0f0e4bd6363152331d07ab:177","type":"sequence"}]
 */
class UserLegacyAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group dd4a5e667a0f0e4bd6363152331d07ab:177
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

