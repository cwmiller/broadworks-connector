<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentSettings
 *
 * Specifies an agent's settings for a particular Call Center.
 *         The skillLevel only applies to Premium agents.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:254","type":"sequence"}]
 */
class CallCenterAgentSettings extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:254
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName available
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:254
     * @var bool|null
     */
    private $available = null;

    /**
     * @ElementName skillLevel
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:254
     * @var int|null
     */
    private $skillLevel = null;

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
     * Getter for available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->available;
    }

    /**
     * Setter for available
     *
     * @param bool $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailable()
    {
        $this->available = null;
        return $this;
    }

    /**
     * Getter for skillLevel
     *
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skillLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @param int $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkillLevel()
    {
        $this->skillLevel = null;
        return $this;
    }


}

