<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentSettings
 *
 * Specifies an agent's settings for a particular Call Center.
 *         The skillLevel only applies to Premium agents.
 */
class CallCenterAgentSettings extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName available
     * @var bool|null
     */
    private $available = null;

    /**
     * @ElementName skillLevel
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for available
     *
     * @ElementName available
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Setter for available
     *
     * @ElementName available
     * @param bool|null $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * Getter for skillLevel
     *
     * @ElementName skillLevel
     * @return int|null
     */
    public function getSkillLevel()
    {
        return $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @ElementName skillLevel
     * @param int|null $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }


}

