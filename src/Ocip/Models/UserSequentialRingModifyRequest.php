<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingModifyRequest
 *
 * Modify the user's sequential ring service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSequentialRingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName ringBaseLocationFirst
     * @var bool|null
     */
    private $ringBaseLocationFirst = null;

    /**
     * @ElementName baseLocationNumberOfRings
     * @var int|null
     */
    private $baseLocationNumberOfRings = null;

    /**
     * @ElementName continueIfBaseLocationIsBusy
     * @var bool|null
     */
    private $continueIfBaseLocationIsBusy = null;

    /**
     * @ElementName callerMayStopSearch
     * @var bool|null
     */
    private $callerMayStopSearch = null;

    /**
     * @ElementName Location01
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location01 = null;

    /**
     * @ElementName Location02
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location02 = null;

    /**
     * @ElementName Location03
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location03 = null;

    /**
     * @ElementName Location04
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location04 = null;

    /**
     * @ElementName Location05
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location05 = null;

    /**
     * @ElementName criteriaActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

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
     * Getter for ringBaseLocationFirst
     *
     * @ElementName ringBaseLocationFirst
     * @return bool|null
     */
    public function getRingBaseLocationFirst()
    {
        return $this->ringBaseLocationFirst;
    }

    /**
     * Setter for ringBaseLocationFirst
     *
     * @ElementName ringBaseLocationFirst
     * @param bool|null $ringBaseLocationFirst
     * @return $this
     */
    public function setRingBaseLocationFirst($ringBaseLocationFirst)
    {
        $this->ringBaseLocationFirst = $ringBaseLocationFirst;
        return $this;
    }

    /**
     * Getter for baseLocationNumberOfRings
     *
     * @ElementName baseLocationNumberOfRings
     * @return int|null
     */
    public function getBaseLocationNumberOfRings()
    {
        return $this->baseLocationNumberOfRings;
    }

    /**
     * Setter for baseLocationNumberOfRings
     *
     * @ElementName baseLocationNumberOfRings
     * @param int|null $baseLocationNumberOfRings
     * @return $this
     */
    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings)
    {
        $this->baseLocationNumberOfRings = $baseLocationNumberOfRings;
        return $this;
    }

    /**
     * Getter for continueIfBaseLocationIsBusy
     *
     * @ElementName continueIfBaseLocationIsBusy
     * @return bool|null
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return $this->continueIfBaseLocationIsBusy;
    }

    /**
     * Setter for continueIfBaseLocationIsBusy
     *
     * @ElementName continueIfBaseLocationIsBusy
     * @param bool|null $continueIfBaseLocationIsBusy
     * @return $this
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy)
    {
        $this->continueIfBaseLocationIsBusy = $continueIfBaseLocationIsBusy;
        return $this;
    }

    /**
     * Getter for callerMayStopSearch
     *
     * @ElementName callerMayStopSearch
     * @return bool|null
     */
    public function getCallerMayStopSearch()
    {
        return $this->callerMayStopSearch;
    }

    /**
     * Setter for callerMayStopSearch
     *
     * @ElementName callerMayStopSearch
     * @param bool|null $callerMayStopSearch
     * @return $this
     */
    public function setCallerMayStopSearch($callerMayStopSearch)
    {
        $this->callerMayStopSearch = $callerMayStopSearch;
        return $this;
    }

    /**
     * Getter for Location01
     *
     * @ElementName Location01
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    public function getLocation01()
    {
        return $this->Location01;
    }

    /**
     * Setter for Location01
     *
     * @ElementName Location01
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null $Location01
     * @return $this
     */
    public function setLocation01($Location01)
    {
        $this->Location01 = $Location01;
        return $this;
    }

    /**
     * Getter for Location02
     *
     * @ElementName Location02
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    public function getLocation02()
    {
        return $this->Location02;
    }

    /**
     * Setter for Location02
     *
     * @ElementName Location02
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null $Location02
     * @return $this
     */
    public function setLocation02($Location02)
    {
        $this->Location02 = $Location02;
        return $this;
    }

    /**
     * Getter for Location03
     *
     * @ElementName Location03
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    public function getLocation03()
    {
        return $this->Location03;
    }

    /**
     * Setter for Location03
     *
     * @ElementName Location03
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null $Location03
     * @return $this
     */
    public function setLocation03($Location03)
    {
        $this->Location03 = $Location03;
        return $this;
    }

    /**
     * Getter for Location04
     *
     * @ElementName Location04
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    public function getLocation04()
    {
        return $this->Location04;
    }

    /**
     * Setter for Location04
     *
     * @ElementName Location04
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null $Location04
     * @return $this
     */
    public function setLocation04($Location04)
    {
        $this->Location04 = $Location04;
        return $this;
    }

    /**
     * Getter for Location05
     *
     * @ElementName Location05
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    public function getLocation05()
    {
        return $this->Location05;
    }

    /**
     * Setter for Location05
     *
     * @ElementName Location05
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null $Location05
     * @return $this
     */
    public function setLocation05($Location05)
    {
        $this->Location05 = $Location05;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation []= $criteriaActivation;
        return $this;
    }


}

