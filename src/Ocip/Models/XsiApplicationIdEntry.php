<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiApplicationIdEntry
 *
 * The system application Id entry.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:20132","type":"sequence"}]
 */
class XsiApplicationIdEntry
{

    /**
     * @ElementName xsiApplicationId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20132
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $xsiApplicationId = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20132
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for xsiApplicationId
     *
     * @return string
     */
    public function getXsiApplicationId()
    {
        return $this->xsiApplicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiApplicationId;
    }

    /**
     * Setter for xsiApplicationId
     *
     * @param string $xsiApplicationId
     * @return $this
     */
    public function setXsiApplicationId($xsiApplicationId)
    {
        $this->xsiApplicationId = $xsiApplicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiApplicationId()
    {
        $this->xsiApplicationId = null;
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

