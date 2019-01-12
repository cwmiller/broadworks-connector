<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLegacyAutomaticCallbackGetResponse
 *
 * Response to UserLegacyAutomaticCallbackGetRequest.
 *
 * @see UserLegacyAutomaticCallbackGetRequest
 * @Groups [{"id":"6bf3c0ead6c4d948122ea83af7fc6e34:178","type":"sequence"}]
 */
class UserLegacyAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:178
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

