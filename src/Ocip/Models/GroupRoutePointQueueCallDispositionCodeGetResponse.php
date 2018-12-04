<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointQueueCallDispositionCodeGetResponse
 *
 * Response to the GroupRoutePointQueueCallDispositionCodeGetRequest
 *
 * @see GroupRoutePointQueueCallDispositionCodeGetRequest
 * @Groups [{"id":"307cc214f72f448b9a7e28f218444528:1107","type":"sequence"}]
 */
class GroupRoutePointQueueCallDispositionCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 307cc214f72f448b9a7e28f218444528:1107
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 307cc214f72f448b9a7e28f218444528:1107
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

