<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaRequest15sp2
 *
 * Get a criteria for the user's custom ringback service.
 *         The response is either a UserCustomRingbackUserGetCriteriaResponse15sp2
 * or an ErrorResponse.
 *         Replaced By: UserCustomRingbackUserGetCriteriaRequest16
 */
class UserCustomRingbackUserGetCriteriaRequest15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

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
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }


}

