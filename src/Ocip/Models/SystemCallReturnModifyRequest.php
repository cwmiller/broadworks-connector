<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallReturnModifyRequest
 *
 * Modify the system level data associated with Call Return.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallReturnModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName twoLevelActivation
     * @var bool|null
     */
    private $twoLevelActivation = null;

    /**
     * @ElementName provideDate
     * @var bool|null
     */
    private $provideDate = null;

    /**
     * @ElementName lastUnansweredCallOnly
     * @var bool|null
     */
    private $lastUnansweredCallOnly = null;

    /**
     * @ElementName confirmationKey
     * @var string|null
     */
    private $confirmationKey = null;

    /**
     * @ElementName allowRestrictedNumber
     * @var bool|null
     */
    private $allowRestrictedNumber = null;

    /**
     * @ElementName deleteNumberAfterAnsweredCallReturn
     * @var bool|null
     */
    private $deleteNumberAfterAnsweredCallReturn = null;

    /**
     * Getter for twoLevelActivation
     *
     * @ElementName twoLevelActivation
     * @return bool|null
     */
    public function getTwoLevelActivation()
    {
        return $this->twoLevelActivation;
    }

    /**
     * Setter for twoLevelActivation
     *
     * @ElementName twoLevelActivation
     * @param bool|null $twoLevelActivation
     * @return $this
     */
    public function setTwoLevelActivation($twoLevelActivation)
    {
        $this->twoLevelActivation = $twoLevelActivation;
        return $this;
    }

    /**
     * Getter for provideDate
     *
     * @ElementName provideDate
     * @return bool|null
     */
    public function getProvideDate()
    {
        return $this->provideDate;
    }

    /**
     * Setter for provideDate
     *
     * @ElementName provideDate
     * @param bool|null $provideDate
     * @return $this
     */
    public function setProvideDate($provideDate)
    {
        $this->provideDate = $provideDate;
        return $this;
    }

    /**
     * Getter for lastUnansweredCallOnly
     *
     * @ElementName lastUnansweredCallOnly
     * @return bool|null
     */
    public function getLastUnansweredCallOnly()
    {
        return $this->lastUnansweredCallOnly;
    }

    /**
     * Setter for lastUnansweredCallOnly
     *
     * @ElementName lastUnansweredCallOnly
     * @param bool|null $lastUnansweredCallOnly
     * @return $this
     */
    public function setLastUnansweredCallOnly($lastUnansweredCallOnly)
    {
        $this->lastUnansweredCallOnly = $lastUnansweredCallOnly;
        return $this;
    }

    /**
     * Getter for confirmationKey
     *
     * @ElementName confirmationKey
     * @return string|null
     */
    public function getConfirmationKey()
    {
        return $this->confirmationKey;
    }

    /**
     * Setter for confirmationKey
     *
     * @ElementName confirmationKey
     * @param string|null $confirmationKey
     * @return $this
     */
    public function setConfirmationKey($confirmationKey)
    {
        $this->confirmationKey = $confirmationKey;
        return $this;
    }

    /**
     * Getter for allowRestrictedNumber
     *
     * @ElementName allowRestrictedNumber
     * @return bool|null
     */
    public function getAllowRestrictedNumber()
    {
        return $this->allowRestrictedNumber;
    }

    /**
     * Setter for allowRestrictedNumber
     *
     * @ElementName allowRestrictedNumber
     * @param bool|null $allowRestrictedNumber
     * @return $this
     */
    public function setAllowRestrictedNumber($allowRestrictedNumber)
    {
        $this->allowRestrictedNumber = $allowRestrictedNumber;
        return $this;
    }

    /**
     * Getter for deleteNumberAfterAnsweredCallReturn
     *
     * @ElementName deleteNumberAfterAnsweredCallReturn
     * @return bool|null
     */
    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return $this->deleteNumberAfterAnsweredCallReturn;
    }

    /**
     * Setter for deleteNumberAfterAnsweredCallReturn
     *
     * @ElementName deleteNumberAfterAnsweredCallReturn
     * @param bool|null $deleteNumberAfterAnsweredCallReturn
     * @return $this
     */
    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn)
    {
        $this->deleteNumberAfterAnsweredCallReturn = $deleteNumberAfterAnsweredCallReturn;
        return $this;
    }


}

