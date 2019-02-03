<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaRequest16
 *
 * Get a criteria for the user's custom ringback service.
 *         The response is either a UserCustomRingbackUserGetCriteriaResponse16 or an ErrorResponse.
 *
 *         Replaced by: UserCustomRingbackUserGetCriteriaRequest20 in AS data mode
 *
 * @see UserCustomRingbackUserGetCriteriaResponse16
 * @see ErrorResponse
 * @see UserCustomRingbackUserGetCriteriaRequest20
 * @Groups [{"id":"a8b2edcd7d6936a8b76653949ae59623:275","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a8b2edcd7d6936a8b76653949ae59623:275
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group a8b2edcd7d6936a8b76653949ae59623:275
     * @var string|null
     */
    private $criteriaName = null;

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
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }


}

