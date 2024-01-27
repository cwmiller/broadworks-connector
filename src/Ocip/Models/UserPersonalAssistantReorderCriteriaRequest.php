<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantReorderCriteriaRequest
 *
 * Reorders only the Schedule Selective Criteria entries.   
 *         Criteria entries received in the orderedCriteriaList element are set at the top of the ordered criteria list. 
 *         Existing criteria not received in orderedCriteriaList are moved down to a lower priority.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:487","type":"sequence"}]
 */
class UserPersonalAssistantReorderCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:487
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName orderedCriteriaList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OrderedCriteriaList
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:487
     * @var \CWM\BroadWorksConnector\Ocip\Models\OrderedCriteriaList|null
     */
    protected $orderedCriteriaList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
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
     * Getter for orderedCriteriaList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OrderedCriteriaList
     */
    public function getOrderedCriteriaList()
    {
        return $this->orderedCriteriaList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedCriteriaList;
    }

    /**
     * Setter for orderedCriteriaList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OrderedCriteriaList $orderedCriteriaList
     * @return $this
     */
    public function setOrderedCriteriaList(\CWM\BroadWorksConnector\Ocip\Models\OrderedCriteriaList $orderedCriteriaList)
    {
        $this->orderedCriteriaList = $orderedCriteriaList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderedCriteriaList()
    {
        $this->orderedCriteriaList = null;
        return $this;
    }
}

