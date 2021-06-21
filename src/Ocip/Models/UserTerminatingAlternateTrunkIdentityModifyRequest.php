<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityModifyRequest
 *
 * Modify the user level data associated with Terminating Alternate Trunk Identity.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4093","type":"sequence"}]
 */
class UserTerminatingAlternateTrunkIdentityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4093
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName terminatingTrunkIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4093
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $terminatingTrunkIdentity = null;

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
     * Getter for terminatingTrunkIdentity
     *
     * @return string|null
     */
    public function getTerminatingTrunkIdentity()
    {
        return $this->terminatingTrunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingTrunkIdentity;
    }

    /**
     * Setter for terminatingTrunkIdentity
     *
     * @param string|null $terminatingTrunkIdentity
     * @return $this
     */
    public function setTerminatingTrunkIdentity($terminatingTrunkIdentity = null)
    {
        if ($terminatingTrunkIdentity === null) {
            $this->terminatingTrunkIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->terminatingTrunkIdentity = $terminatingTrunkIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatingTrunkIdentity()
    {
        $this->terminatingTrunkIdentity = null;
        return $this;
    }


}

