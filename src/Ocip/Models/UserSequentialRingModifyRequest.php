<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingModifyRequest
 *
 * Modify the user's sequential ring service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6a83dcd7b5697b78acbf42324c2dbe67:181","type":"sequence"}]
 */
class UserSequentialRingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName ringBaseLocationFirst
     * @Type bool
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var bool|null
     */
    private $ringBaseLocationFirst = null;

    /**
     * @ElementName baseLocationNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null
     */
    private $baseLocationNumberOfRings = null;

    /**
     * @ElementName continueIfBaseLocationIsBusy
     * @Type bool
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var bool|null
     */
    private $continueIfBaseLocationIsBusy = null;

    /**
     * @ElementName callerMayStopSearch
     * @Type bool
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var bool|null
     */
    private $callerMayStopSearch = null;

    /**
     * @ElementName Location01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location01 = null;

    /**
     * @ElementName Location02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location02 = null;

    /**
     * @ElementName Location03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location03 = null;

    /**
     * @ElementName Location04
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location04 = null;

    /**
     * @ElementName Location05
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify|null
     */
    private $Location05 = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group 6a83dcd7b5697b78acbf42324c2dbe67:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

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
     * Getter for ringBaseLocationFirst
     *
     * @return bool
     */
    public function getRingBaseLocationFirst()
    {
        return $this->ringBaseLocationFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringBaseLocationFirst;
    }

    /**
     * Setter for ringBaseLocationFirst
     *
     * @param bool $ringBaseLocationFirst
     * @return $this
     */
    public function setRingBaseLocationFirst($ringBaseLocationFirst)
    {
        $this->ringBaseLocationFirst = $ringBaseLocationFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingBaseLocationFirst()
    {
        $this->ringBaseLocationFirst = null;
        return $this;
    }

    /**
     * Getter for baseLocationNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings
     */
    public function getBaseLocationNumberOfRings()
    {
        return $this->baseLocationNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->baseLocationNumberOfRings;
    }

    /**
     * Setter for baseLocationNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings $baseLocationNumberOfRings
     * @return $this
     */
    public function setBaseLocationNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings $baseLocationNumberOfRings)
    {
        $this->baseLocationNumberOfRings = $baseLocationNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBaseLocationNumberOfRings()
    {
        $this->baseLocationNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for continueIfBaseLocationIsBusy
     *
     * @return bool
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return $this->continueIfBaseLocationIsBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueIfBaseLocationIsBusy;
    }

    /**
     * Setter for continueIfBaseLocationIsBusy
     *
     * @param bool $continueIfBaseLocationIsBusy
     * @return $this
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy)
    {
        $this->continueIfBaseLocationIsBusy = $continueIfBaseLocationIsBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueIfBaseLocationIsBusy()
    {
        $this->continueIfBaseLocationIsBusy = null;
        return $this;
    }

    /**
     * Getter for callerMayStopSearch
     *
     * @return bool
     */
    public function getCallerMayStopSearch()
    {
        return $this->callerMayStopSearch instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callerMayStopSearch;
    }

    /**
     * Setter for callerMayStopSearch
     *
     * @param bool $callerMayStopSearch
     * @return $this
     */
    public function setCallerMayStopSearch($callerMayStopSearch)
    {
        $this->callerMayStopSearch = $callerMayStopSearch;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallerMayStopSearch()
    {
        $this->callerMayStopSearch = null;
        return $this;
    }

    /**
     * Getter for Location01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     */
    public function getLocation01()
    {
        return $this->Location01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location01;
    }

    /**
     * Setter for Location01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location01
     * @return $this
     */
    public function setLocation01(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location01)
    {
        $this->Location01 = $Location01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocation01()
    {
        $this->Location01 = null;
        return $this;
    }

    /**
     * Getter for Location02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     */
    public function getLocation02()
    {
        return $this->Location02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location02;
    }

    /**
     * Setter for Location02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location02
     * @return $this
     */
    public function setLocation02(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location02)
    {
        $this->Location02 = $Location02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocation02()
    {
        $this->Location02 = null;
        return $this;
    }

    /**
     * Getter for Location03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     */
    public function getLocation03()
    {
        return $this->Location03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location03;
    }

    /**
     * Setter for Location03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location03
     * @return $this
     */
    public function setLocation03(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location03)
    {
        $this->Location03 = $Location03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocation03()
    {
        $this->Location03 = null;
        return $this;
    }

    /**
     * Getter for Location04
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     */
    public function getLocation04()
    {
        return $this->Location04 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location04;
    }

    /**
     * Setter for Location04
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location04
     * @return $this
     */
    public function setLocation04(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location04)
    {
        $this->Location04 = $Location04;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocation04()
    {
        $this->Location04 = null;
        return $this;
    }

    /**
     * Getter for Location05
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify
     */
    public function getLocation05()
    {
        return $this->Location05 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location05;
    }

    /**
     * Setter for Location05
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location05
     * @return $this
     */
    public function setLocation05(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocationModify $Location05)
    {
        $this->Location05 = $Location05;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocation05()
    {
        $this->Location05 = null;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaActivation()
    {
        $this->criteriaActivation = null;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation[] = $criteriaActivation;
        return $this;
    }


}

