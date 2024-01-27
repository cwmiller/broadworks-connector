<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationModifyRequest
 *
 * Modify a user's Security Classification configuration
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:346","type":"sequence"}]
 */
class UserSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 435c279b3e6710f4ada60ed66a93d278:346
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName securityClassification
     * @Type string
     * @Nillable
     * @Group 435c279b3e6710f4ada60ed66a93d278:346
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $securityClassification = null;

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
     * Getter for securityClassification
     *
     * @return string|null
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @param string|null $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification = null)
    {
        if ($securityClassification === null) {
            $this->securityClassification = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->securityClassification = $securityClassification;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassification()
    {
        $this->securityClassification = null;
        return $this;
    }
}

