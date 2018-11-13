<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberDeleteListRequest
 *
 * Delete a list of User Personal Assistant Exclusion Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPersonalAssistantExclusionNumberDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName exclusionNumber
     * @Type string
     * @Array
     * @var string[]
     */
    private $exclusionNumber = array(
        
    );

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
     * Getter for exclusionNumber
     *
     * @return string[]
     */
    public function getExclusionNumber()
    {
        return $this->exclusionNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exclusionNumber;
    }

    /**
     * Setter for exclusionNumber
     *
     * @param string[] $exclusionNumber
     * @return $this
     */
    public function setExclusionNumber(array $exclusionNumber)
    {
        $this->exclusionNumber = $exclusionNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExclusionNumber()
    {
        $this->exclusionNumber = null;
        return $this;
    }

    /**
     * Adder for exclusionNumber
     *
     * @param string $exclusionNumber
     * @return $this
     */
    public function addExclusionNumber(string $exclusionNumber)
    {
        $this->exclusionNumber[] = $exclusionNumber;
        return $this;
    }


}

