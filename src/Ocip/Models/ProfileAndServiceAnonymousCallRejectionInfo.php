<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceAnonymousCallRejectionInfo
 *
 * This is the configuration parameters for anonymous Call Rejection service
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4029","type":"sequence"}]
 */
class ProfileAndServiceAnonymousCallRejectionInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4029
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

