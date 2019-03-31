<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkAddInstanceRequest16sp2
 *
 * Adds a Call Park group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a925e891158dfa3cb1319e045608894:55","type":"sequence"}]
 */
class GroupCallParkAddInstanceRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * @ElementName recallAlternateUserId
     * @Type string
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     * @Group 7a925e891158dfa3cb1319e045608894:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    private $recallTo = null;

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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string[] $userId
     * @return $this
     */
    public function setUserId(array $userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Adder for userId
     *
     * @param string $userId
     * @return $this
     */
    public function addUserId(string $userId)
    {
        $this->userId[] = $userId;
        return $this;
    }

    /**
     * Getter for recallAlternateUserId
     *
     * @return string
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @param string $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallAlternateUserId()
    {
        $this->recallAlternateUserId = null;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTo()
    {
        $this->recallTo = null;
        return $this;
    }


}

