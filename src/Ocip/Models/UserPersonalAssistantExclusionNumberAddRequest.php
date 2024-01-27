<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberAddRequest
 *
 * Add a User Personal Assistant Exclusion Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:232","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:232
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName exclusionNumber
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:232
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $exclusionNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:232
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

