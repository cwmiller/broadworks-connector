<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyAddAccessCodeRequest
 *
 * Request to add a system-level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9037","type":"sequence"}]
 */
class SystemDialPlanPolicyAddAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName accessCode
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9037
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    private $accessCode = null;

    /**
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9037
     * @var bool|null
     */
    private $includeCodeForNetworkTranslationsAndRouting = null;

    /**
     * @ElementName includeCodeForScreeningServices
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9037
     * @var bool|null
     */
    private $includeCodeForScreeningServices = null;

    /**
     * @ElementName enableSecondaryDialTone
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9037
     * @var bool|null
     */
    private $enableSecondaryDialTone = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9037
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }

    /**
     * Getter for includeCodeForNetworkTranslationsAndRouting
     *
     * @return bool
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * Setter for includeCodeForNetworkTranslationsAndRouting
     *
     * @param bool $includeCodeForNetworkTranslationsAndRouting
     * @return $this
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForNetworkTranslationsAndRouting()
    {
        $this->includeCodeForNetworkTranslationsAndRouting = null;
        return $this;
    }

    /**
     * Getter for includeCodeForScreeningServices
     *
     * @return bool
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForScreeningServices;
    }

    /**
     * Setter for includeCodeForScreeningServices
     *
     * @param bool $includeCodeForScreeningServices
     * @return $this
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $this->includeCodeForScreeningServices = $includeCodeForScreeningServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForScreeningServices()
    {
        $this->includeCodeForScreeningServices = null;
        return $this;
    }

    /**
     * Getter for enableSecondaryDialTone
     *
     * @return bool
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSecondaryDialTone;
    }

    /**
     * Setter for enableSecondaryDialTone
     *
     * @param bool $enableSecondaryDialTone
     * @return $this
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $this->enableSecondaryDialTone = $enableSecondaryDialTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSecondaryDialTone()
    {
        $this->enableSecondaryDialTone = null;
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

