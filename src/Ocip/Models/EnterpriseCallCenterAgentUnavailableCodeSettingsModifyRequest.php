<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest
 *
 * Modify the enterprise level data associated with Call Center Agents Unavailable
 * Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enableAgentUnavailableCodes
     * @var bool|null
     */
    private $enableAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnDND = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnPersonalCalls = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnConsecutiveBounces = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnNotReachable
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnNotReachable = null;

    /**
     * @ElementName forceUseOfAgentUnavailableCodes
     * @var bool|null
     */
    private $forceUseOfAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCode = null;

    /**
     * @ElementName codeStateList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[]
     */
    private $codeStateList = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for enableAgentUnavailableCodes
     *
     * @ElementName enableAgentUnavailableCodes
     * @return bool|null
     */
    public function getEnableAgentUnavailableCodes()
    {
        return $this->enableAgentUnavailableCodes;
    }

    /**
     * Setter for enableAgentUnavailableCodes
     *
     * @ElementName enableAgentUnavailableCodes
     * @param bool|null $enableAgentUnavailableCodes
     * @return $this
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes)
    {
        $this->enableAgentUnavailableCodes = $enableAgentUnavailableCodes;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnDND
     *
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnDND
     *
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultAgentUnavailableCodeOnDND
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND)
    {
        $this->defaultAgentUnavailableCodeOnDND = $defaultAgentUnavailableCodeOnDND;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultAgentUnavailableCodeOnPersonalCalls
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = $defaultAgentUnavailableCodeOnPersonalCalls;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultAgentUnavailableCodeOnConsecutiveBounces
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = $defaultAgentUnavailableCodeOnConsecutiveBounces;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnNotReachable
     *
     * @ElementName defaultAgentUnavailableCodeOnNotReachable
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultAgentUnavailableCodeOnNotReachable()
    {
        return $this->defaultAgentUnavailableCodeOnNotReachable;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnNotReachable
     *
     * @ElementName defaultAgentUnavailableCodeOnNotReachable
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultAgentUnavailableCodeOnNotReachable
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnNotReachable($defaultAgentUnavailableCodeOnNotReachable)
    {
        $this->defaultAgentUnavailableCodeOnNotReachable = $defaultAgentUnavailableCodeOnNotReachable;
        return $this;
    }

    /**
     * Getter for forceUseOfAgentUnavailableCodes
     *
     * @ElementName forceUseOfAgentUnavailableCodes
     * @return bool|null
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return $this->forceUseOfAgentUnavailableCodes;
    }

    /**
     * Setter for forceUseOfAgentUnavailableCodes
     *
     * @ElementName forceUseOfAgentUnavailableCodes
     * @param bool|null $forceUseOfAgentUnavailableCodes
     * @return $this
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes)
    {
        $this->forceUseOfAgentUnavailableCodes = $forceUseOfAgentUnavailableCodes;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCode
     *
     * @ElementName defaultAgentUnavailableCode
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode;
    }

    /**
     * Setter for defaultAgentUnavailableCode
     *
     * @ElementName defaultAgentUnavailableCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultAgentUnavailableCode
     * @return $this
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode)
    {
        $this->defaultAgentUnavailableCode = $defaultAgentUnavailableCode;
        return $this;
    }

    /**
     * Getter for codeStateList
     *
     * @ElementName codeStateList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[]
     */
    public function getCodeStateList()
    {
        return $this->codeStateList;
    }

    /**
     * Setter for codeStateList
     *
     * @ElementName codeStateList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[] $codeStateList
     * @return $this
     */
    public function setCodeStateList($codeStateList)
    {
        $this->codeStateList = $codeStateList;
        return $this;
    }

    /**
     * Adder for codeStateList
     *
     * @ElementName codeStateList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify $codeStateList
     * @return $this
     */
    public function addCodeStateList($codeStateList)
    {
        $this->codeStateList []= $codeStateList;
        return $this;
    }


}

