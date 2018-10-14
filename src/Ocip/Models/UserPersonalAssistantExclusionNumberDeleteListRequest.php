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
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName exclusionNumber
     * @var string[]
     */
    private $exclusionNumber = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for exclusionNumber
     *
     * @ElementName exclusionNumber
     * @return string[]
     */
    public function getExclusionNumber()
    {
        return $this->exclusionNumber;
    }

    /**
     * Setter for exclusionNumber
     *
     * @ElementName exclusionNumber
     * @param string[] $exclusionNumber
     * @return $this
     */
    public function setExclusionNumber(array $exclusionNumber)
    {
        $this->exclusionNumber = $exclusionNumber;
        return $this;
    }

    /**
     * Adder for exclusionNumber
     *
     * @ElementName exclusionNumber
     * @param string $exclusionNumber
     * @return $this
     */
    public function addExclusionNumber(string $exclusionNumber)
    {
        $this->exclusionNumber []= $exclusionNumber;
        return $this;
    }


}

