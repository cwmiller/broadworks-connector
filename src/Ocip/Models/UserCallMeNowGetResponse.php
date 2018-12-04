<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetResponse
 *
 * Response to the UserCallMeNowGetRequest. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Call To", "Reject Call" and "Holiday Schedule".
 *
 * @see UserCallMeNowGetRequest
 * @Groups [{"id":"4b461d8be4f7bfba1e05db8efbd896b6:183","type":"sequence"}]
 */
class UserCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:183
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName answerConfirmation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallMeNowAnswerConfirmation|null
     */
    private $answerConfirmation = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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

