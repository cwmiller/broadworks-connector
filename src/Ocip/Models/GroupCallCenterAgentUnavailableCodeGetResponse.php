<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeGetResponse
 *
 * Response to the GroupCallCenterAgentUnavailableCodeGetRequest
 *
 * @see GroupCallCenterAgentUnavailableCodeGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:2608","type":"sequence"}]
 */
class GroupCallCenterAgentUnavailableCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:2608
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2608
     * @var string|null
     */
    private $description = null;

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

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

