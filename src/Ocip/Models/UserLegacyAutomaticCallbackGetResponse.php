<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLegacyAutomaticCallbackGetResponse
 *
 * Response to UserLegacyAutomaticCallbackGetRequest.
 *
 * @see UserLegacyAutomaticCallbackGetRequest
 * @Groups [{"id":"a7cf2420de189d76c278c486b4b2b0c3:179","type":"sequence"}]
 */
class UserLegacyAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group a7cf2420de189d76c278c486b4b2b0c3:179
     * @var bool|null
     */
    private $isActive = null;

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

