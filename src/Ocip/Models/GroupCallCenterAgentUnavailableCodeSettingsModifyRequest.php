<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeSettingsModifyRequest
 *
 * Modify the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:2370","type":"sequence"}]
 */
class GroupCallCenterAgentUnavailableCodeSettingsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName enableAgentUnavailableCodes
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var bool|null
     */
    private $enableAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnDND = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnPersonalCalls = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnConsecutiveBounces = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnNotReachable
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCodeOnNotReachable = null;

    /**
     * @ElementName forceUseOfAgentUnavailableCodes
     * @Type bool
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var bool|null
     */
    private $forceUseOfAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultAgentUnavailableCode = null;

    /**
     * @ElementName codeStateList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify
     * @Array
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2370
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[]
     */
    private $codeStateList = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnDND;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnDND
     *
     * @param string|null $defaultAgentUnavailableCodeOnDND
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND)
    {
        if ($defaultAgentUnavailableCodeOnDND === null) {
            $this->defaultAgentUnavailableCodeOnDND = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultAgentUnavailableCodeOnDND = $defaultAgentUnavailableCodeOnDND;
        }
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
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnPersonalCalls;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @param string|null $defaultAgentUnavailableCodeOnPersonalCalls
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls)
    {
        if ($defaultAgentUnavailableCodeOnPersonalCalls === null) {
            $this->defaultAgentUnavailableCodeOnPersonalCalls = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultAgentUnavailableCodeOnPersonalCalls = $defaultAgentUnavailableCodeOnPersonalCalls;
        }
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
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnConsecutiveBounces;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @param string|null $defaultAgentUnavailableCodeOnConsecutiveBounces
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces)
    {
        if ($defaultAgentUnavailableCodeOnConsecutiveBounces === null) {
            $this->defaultAgentUnavailableCodeOnConsecutiveBounces = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultAgentUnavailableCodeOnConsecutiveBounces = $defaultAgentUnavailableCodeOnConsecutiveBounces;
        }
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
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnNotReachable()
    {
        return $this->defaultAgentUnavailableCodeOnNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCodeOnNotReachable;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnNotReachable
     *
     * @param string|null $defaultAgentUnavailableCodeOnNotReachable
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnNotReachable($defaultAgentUnavailableCodeOnNotReachable)
    {
        if ($defaultAgentUnavailableCodeOnNotReachable === null) {
            $this->defaultAgentUnavailableCodeOnNotReachable = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultAgentUnavailableCodeOnNotReachable = $defaultAgentUnavailableCodeOnNotReachable;
        }
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
     * @return string|null
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultAgentUnavailableCode;
    }

    /**
     * Setter for defaultAgentUnavailableCode
     *
     * @param string|null $defaultAgentUnavailableCode
     * @return $this
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode)
    {
        if ($defaultAgentUnavailableCode === null) {
            $this->defaultAgentUnavailableCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultAgentUnavailableCode = $defaultAgentUnavailableCode;
        }
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

    /**
     * Getter for codeStateList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[]
     */
    public function getCodeStateList()
    {
        return $this->codeStateList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codeStateList;
    }

    /**
     * Setter for codeStateList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify[] $codeStateList
     * @return $this
     */
    public function setCodeStateList(array $codeStateList)
    {
        $this->codeStateList = $codeStateList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodeStateList()
    {
        $this->codeStateList = null;
        return $this;
    }

    /**
     * Adder for codeStateList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentUnavailableCodeStateModify $codeStateList
     * @return $this
     */
    public function addCodeStateList($codeStateList)
    {
        $this->codeStateList[] = $codeStateList;
        return $this;
    }


}

