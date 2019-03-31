<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
 *
 * Response to EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4.
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:874","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableAgentUnavailableCodes
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @var bool|null
     */
    private $enableAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnDND = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnPersonalCalls = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnConsecutiveBounces = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnNotReachable
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnNotReachable = null;

    /**
     * @ElementName forceUseOfAgentUnavailableCodes
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @var bool|null
     */
    private $forceUseOfAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCode
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:874
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $defaultAgentUnavailableCode = null;

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
     * Getter for defaultAgentUnavailableCodeOnNotReachable
     *
     * @return string
     */
    public function getDefaultAgentUnavailableCodeOnNotReachable()
    {
        return $this->defaultAgentUnavailableCodeOnNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnNotReachable;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnNotReachable
     *
     * @param string $defaultAgentUnavailableCodeOnNotReachable
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnNotReachable($defaultAgentUnavailableCodeOnNotReachable)
    {
        $this->defaultAgentUnavailableCodeOnNotReachable = $defaultAgentUnavailableCodeOnNotReachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultAgentUnavailableCodeOnNotReachable()
    {
        $this->defaultAgentUnavailableCodeOnNotReachable = null;
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

