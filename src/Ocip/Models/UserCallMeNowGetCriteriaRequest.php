<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetCriteriaRequest
 *
 * Get a criteria for the user's call me now service.
 *         The response is either a UserCallMeNowGetCriteriaResponse or an ErrorResponse.
 *
 * @see UserCallMeNowGetCriteriaResponse
 * @see ErrorResponse
 * @Groups [{"id":"1f0f230fee2817fe00157925859dc28e:132","type":"sequence"}]
 */
class UserCallMeNowGetCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1f0f230fee2817fe00157925859dc28e:132
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 1f0f230fee2817fe00157925859dc28e:132
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

