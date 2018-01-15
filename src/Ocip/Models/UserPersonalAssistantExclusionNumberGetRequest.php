<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetRequest
 *
 * Get a Personal Assistant Exclusion Number.
 *         The response is either UserPersonalAssistantExclusionNumberGetResponse
 * or ErrorResponse.
 */
class UserPersonalAssistantExclusionNumberGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName exclusionNumber
     * @var string|null
     */
    private $exclusionNumber = null;

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
     * @return string|null
     */
    public function getExclusionNumber()
    {
        return $this->exclusionNumber;
    }

    /**
     * Setter for exclusionNumber
     *
     * @ElementName exclusionNumber
     * @param string|null $exclusionNumber
     * @return $this
     */
    public function setExclusionNumber($exclusionNumber)
    {
        $this->exclusionNumber = $exclusionNumber;
        return $this;
    }


}

