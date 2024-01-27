<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetResponse
 *
 * Response to the UserCallMeNowGetRequest. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Call To", "Reject Call" and "Holiday Schedule".
 *
 * @see UserCallMeNowGetRequest
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:183","type":"sequence"}]
 */
class UserCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group adf9583170c1dc9ec6c152ba1238437a:183
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName answerConfirmation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation
     * @Group adf9583170c1dc9ec6c152ba1238437a:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation|null
     */
    protected $answerConfirmation = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group adf9583170c1dc9ec6c152ba1238437a:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for answerConfirmation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation
     */
    public function getAnswerConfirmation()
    {
        return $this->answerConfirmation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerConfirmation;
    }

    /**
     * Setter for answerConfirmation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation $answerConfirmation
     * @return $this
     */
    public function setAnswerConfirmation(\CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation $answerConfirmation)
    {
        $this->answerConfirmation = $answerConfirmation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerConfirmation()
    {
        $this->answerConfirmation = null;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }
}

