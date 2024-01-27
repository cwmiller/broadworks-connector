<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiApplicationIdEntry
 *
 * The system application Id entry.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20278","type":"sequence"}]
 */
class XsiApplicationIdEntry
{
    /**
     * @ElementName xsiApplicationId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:20278
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $xsiApplicationId = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20278
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

