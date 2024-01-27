<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetRequest
 *
 * Get a Personal Assistant Exclusion Number.
 *         The response is either UserPersonalAssistantExclusionNumberGetResponse or ErrorResponse.
 *
 * @see UserPersonalAssistantExclusionNumberGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:303","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:303
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName exclusionNumber
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:303
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $exclusionNumber = null;

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
     * @return string
     */
    public function getExclusionNumber()
    {
        return $this->exclusionNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exclusionNumber;
    }

    /**
     * Setter for exclusionNumber
     *
     * @param string $exclusionNumber
     * @return $this
     */
    public function setExclusionNumber($exclusionNumber)
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
}

