<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeGetResponse
 *
 * Response to the EnterpriseCallCenterAgentUnavailableCodeGetRequest
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeGetRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:824","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:824
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:824
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $description = null;

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

