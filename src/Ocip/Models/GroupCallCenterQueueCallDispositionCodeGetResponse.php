<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeGetResponse
 *
 * Response to the GroupCallCenterQueueCallDispositionCodeGetRequest
 *
 * @see GroupCallCenterQueueCallDispositionCodeGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5573","type":"sequence"}]
 */
class GroupCallCenterQueueCallDispositionCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5573
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5573
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

