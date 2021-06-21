<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeAddRequest
 *
 * Request to add a service code for the purpose of providing free format routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16075","type":"sequence"}]
 */
class SystemServiceCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceCode
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16075
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceCode = null;

    /**
     * @ElementName description
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16075
     * @MinLength 1
     * @MaxLength 200
     * @var string|null
     */
    private $description = null;

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

