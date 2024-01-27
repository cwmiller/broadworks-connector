<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberModifyRequest
 *
 * Modify an existing User Personal Assistant Exclusion Number description.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:335","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:335
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName exclusionNumber
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:335
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $exclusionNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:335
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

