<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetResponse
 *
 * Response to the UserCallMeNowGetRequest. The criteria table's column headings
 * are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Call To", "Reject Call"
 * and "Holiday Schedule".
 */
class UserCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName answerConfirmation
     * @var string|null
     */
    private $answerConfirmation = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for answerConfirmation
     *
     * @ElementName answerConfirmation
     * @return string|null
     */
    public function getAnswerConfirmation()
    {
        return $this->answerConfirmation;
    }

    /**
     * Setter for answerConfirmation
     *
     * @ElementName answerConfirmation
     * @param string|null $answerConfirmation
     * @return $this
     */
    public function setAnswerConfirmation($answerConfirmation)
    {
        $this->answerConfirmation = $answerConfirmation;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable($criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

