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
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:346","type":"sequence"}]
 */
class UserSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:346
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName securityClassification
     * @Type string
     * @Nillable
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:346
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $securityClassification = null;

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
    public function setSecurityClassification($securityClassification)
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

