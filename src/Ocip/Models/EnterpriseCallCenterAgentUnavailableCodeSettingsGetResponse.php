<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse
 *
 * Response to EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest.
 *         
 *         Replaced by EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4.
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest
 * @see EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2085","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableAgentUnavailableCodes
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @var bool|null
     */
    protected $enableAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $defaultAgentUnavailableCodeOnDND = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $defaultAgentUnavailableCodeOnPersonalCalls = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces = null;

    /**
     * @ElementName forceUseOfAgentUnavailableCodes
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @var bool|null
     */
    protected $forceUseOfAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCode
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2085
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $defaultAgentUnavailableCode = null;

    /**
     * Getter for enableAgentUnavailableCodes
     *
     * @return bool
     */
    public function getEnableAgentUnavailableCodes()
    {
        return $this->enableAgentUnavailableCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAgentUnavailableCodes;
    }

    /**
     * Setter for enableAgentUnavailableCodes
     *
     * @param bool $enableAgentUnavailableCodes
     * @return $this
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes)
    {
        $this->enableAgentUnavailableCodes = $enableAgentUnavailableCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAgentUnavailableCodes()
    {
        $this->enableAgentUnavailableCodes = null;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnDND
     *
     * @return string
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnDND;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnDND
     *
     * @param string $defaultAgentUnavailableCodeOnDND
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND)
    {
        $this->defaultAgentUnavailableCodeOnDND = $defaultAgentUnavailableCodeOnDND;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAgentUnavailableCodeOnDND()
    {
        $this->defaultAgentUnavailableCodeOnDND = null;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @return string
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnPersonalCalls;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @param string $defaultAgentUnavailableCodeOnPersonalCalls
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = $defaultAgentUnavailableCodeOnPersonalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = null;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @return string
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnConsecutiveBounces;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @param string $defaultAgentUnavailableCodeOnConsecutiveBounces
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = $defaultAgentUnavailableCodeOnConsecutiveBounces;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = null;
        return $this;
    }

    /**
     * Getter for forceUseOfAgentUnavailableCodes
     *
     * @return bool
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return $this->forceUseOfAgentUnavailableCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceUseOfAgentUnavailableCodes;
    }

    /**
     * Setter for forceUseOfAgentUnavailableCodes
     *
     * @param bool $forceUseOfAgentUnavailableCodes
     * @return $this
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes)
    {
        $this->forceUseOfAgentUnavailableCodes = $forceUseOfAgentUnavailableCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceUseOfAgentUnavailableCodes()
    {
        $this->forceUseOfAgentUnavailableCodes = null;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCode
     *
     * @return string
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCode;
    }

    /**
     * Setter for defaultAgentUnavailableCode
     *
     * @param string $defaultAgentUnavailableCode
     * @return $this
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode)
    {
        $this->defaultAgentUnavailableCode = $defaultAgentUnavailableCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAgentUnavailableCode()
    {
        $this->defaultAgentUnavailableCode = null;
        return $this;
    }


}

