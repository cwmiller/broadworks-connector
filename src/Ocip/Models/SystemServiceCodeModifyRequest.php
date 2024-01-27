<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeModifyRequest
 *
 * Request to modify service code.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16358","type":"sequence"}]
 */
class SystemServiceCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:16358
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceCode = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16358
     * @MinLength 1
     * @MaxLength 200
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCode()
    {
        $this->serviceCode = null;
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

