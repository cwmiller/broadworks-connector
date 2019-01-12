<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConnectedLineIdentificationRestrictionGetResponse
 *
 * Response to UserConnectedLineIdentificationRestrictionGetRequest.
 *
 * @see UserConnectedLineIdentificationRestrictionGetRequest
 * @Groups [{"id":"755f02354120ea5249923372461f5503:59","type":"sequence"}]
 */
class UserConnectedLineIdentificationRestrictionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 755f02354120ea5249923372461f5503:59
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

