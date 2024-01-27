<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAddAgentListRequest
 *
 * Add agent(s) to a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *         If the skill level is not present for skill based premium call centers, the users will be set to skill level 1.
 *         
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           agentSkillList
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:1949","type":"sequence","children":[{"id":"4d65d3449061c568639c8cc1e2492285:1951","type":"choice"}]}]
 */
class GroupCallCenterAddAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:1949
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:1951
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $agentUserId = [
        
    ];

    /**
     * @ElementName agentSkillList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:1951
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    protected $agentSkillList = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }

    /**
     * Getter for agentSkillList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    public function getAgentSkillList()
    {
        return $this->agentSkillList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentSkillList;
    }

    /**
     * Setter for agentSkillList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[] $agentSkillList
     * @return $this
     */
    public function setAgentSkillList(array $agentSkillList)
    {
        $this->agentSkillList = $agentSkillList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentSkillList()
    {
        $this->agentSkillList = null;
        return $this;
    }

    /**
     * Adder for agentSkillList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList $agentSkillList
     * @return $this
     */
    public function addAgentSkillList($agentSkillList)
    {
        $this->agentSkillList[] = $agentSkillList;
        return $this;
    }
}

