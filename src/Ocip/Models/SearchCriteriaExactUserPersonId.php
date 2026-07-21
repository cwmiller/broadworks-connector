<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserPersonId
 *
 * Criteria for searching for a particular user's personId.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1382","type":"sequence"}]
 */
class SearchCriteriaExactUserPersonId extends SearchCriteria
{
    /**
     * @ElementName userPersonId
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1382
     * @MaxLength 82
     * @var string|null
     */
    protected $userPersonId = null;

    /**
     * Getter for userPersonId
     *
     * @return string
     */
    public function getUserPersonId()
    {
        return $this->userPersonId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPersonId;
    }

    /**
     * Setter for userPersonId
     *
     * @param string $userPersonId
     * @return $this
     */
    public function setUserPersonId($userPersonId)
    {
        $this->userPersonId = $userPersonId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPersonId()
    {
        $this->userPersonId = null;
        return $this;
    }
}

