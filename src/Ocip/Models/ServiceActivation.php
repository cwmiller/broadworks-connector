<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceActivation
 *
 * Service Instance active status indicator
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:3094","type":"sequence"}]
 */
class ServiceActivation
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:3094
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:3094
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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

