<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringAuthorizationCodeConfiguration
 *
 * Communication Barring Authorization Code add entry.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1463","type":"sequence"}]
 */
class CommunicationBarringAuthorizationCodeConfiguration
{
    /**
     * @ElementName code
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1463
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1463
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1463
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
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

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

