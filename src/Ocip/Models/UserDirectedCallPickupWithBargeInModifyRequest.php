<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInModifyRequest
 *
 * Modify the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserDirectedCallPickupWithBargeInModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableBargeInWarningTone
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * @ElementName enableAutomaticTargetSelection
     * @var bool|null
     */
    private $enableAutomaticTargetSelection = null;

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
     * Getter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @return bool|null
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @ElementName enableBargeInWarningTone
     * @param bool|null $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }

    /**
     * Getter for enableAutomaticTargetSelection
     *
     * @ElementName enableAutomaticTargetSelection
     * @return bool|null
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection;
    }

    /**
     * Setter for enableAutomaticTargetSelection
     *
     * @ElementName enableAutomaticTargetSelection
     * @param bool|null $enableAutomaticTargetSelection
     * @return $this
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection)
    {
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        return $this;
    }


}

