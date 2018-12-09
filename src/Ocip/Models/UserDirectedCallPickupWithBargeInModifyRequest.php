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
 * @Groups [{"id":"4280f1ec40e3fa4e98abe7b25b490d22:76","type":"sequence"}]
 */
class UserDirectedCallPickupWithBargeInModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4280f1ec40e3fa4e98abe7b25b490d22:76
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableBargeInWarningTone
     * @Type bool
     * @Optional
     * @Group 4280f1ec40e3fa4e98abe7b25b490d22:76
     * @var bool|null
     */
    private $enableBargeInWarningTone = null;

    /**
     * @ElementName enableAutomaticTargetSelection
     * @Type bool
     * @Optional
     * @Group 4280f1ec40e3fa4e98abe7b25b490d22:76
     * @var bool|null
     */
    private $enableAutomaticTargetSelection = null;

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
     * Getter for enableBargeInWarningTone
     *
     * @return bool
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBargeInWarningTone;
    }

    /**
     * Setter for enableBargeInWarningTone
     *
     * @param bool $enableBargeInWarningTone
     * @return $this
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBargeInWarningTone()
    {
        $this->enableBargeInWarningTone = null;
        return $this;
    }

    /**
     * Getter for enableAutomaticTargetSelection
     *
     * @return bool
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticTargetSelection;
    }

    /**
     * Setter for enableAutomaticTargetSelection
     *
     * @param bool $enableAutomaticTargetSelection
     * @return $this
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection)
    {
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticTargetSelection()
    {
        $this->enableAutomaticTargetSelection = null;
        return $this;
    }


}

