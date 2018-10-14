<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetResponse13mp16
 *
 * Response to the UserSequentialRingGetRequest13mp16. The criteria table's column
 * headings are:
 *         "Is Active", "Criteria Name", "Time Schedule" and "Calls From".
 *         Replaced By: UserSequentialRingGetResponse14sp4
 *
 * @see UserSequentialRingGetRequest13mp16
 * @see UserSequentialRingGetResponse14sp4
 */
class UserSequentialRingGetResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName ringBaseLocationFirst
     * @var bool|null
     */
    private $ringBaseLocationFirst = null;

    /**
     * @ElementName baseLocationNumberOfRings
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    private $Location01 = null;

    /**
     * @ElementName Location02
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    private $Location02 = null;

    /**
     * @ElementName Location03
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    private $Location03 = null;

    /**
     * @ElementName Location04
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    private $Location04 = null;

    /**
     * @ElementName Location05
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    private $Location05 = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null
     */
    public function getBaseLocationNumberOfRings()
    {
        return $this->baseLocationNumberOfRings;
    }

    /**
     * Setter for baseLocationNumberOfRings
     *
     * @ElementName baseLocationNumberOfRings
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null $baseLocationNumberOfRings
     * @return $this
     */
    public function setBaseLocationNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings $baseLocationNumberOfRings)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    public function getLocation01()
    {
        return $this->Location01;
    }

    /**
     * Setter for Location01
     *
     * @ElementName Location01
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null $Location01
     * @return $this
     */
    public function setLocation01(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location01)
    {
        $this->Location01 = $Location01;
        return $this;
    }

    /**
     * Getter for Location02
     *
     * @ElementName Location02
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    public function getLocation02()
    {
        return $this->Location02;
    }

    /**
     * Setter for Location02
     *
     * @ElementName Location02
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null $Location02
     * @return $this
     */
    public function setLocation02(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location02)
    {
        $this->Location02 = $Location02;
        return $this;
    }

    /**
     * Getter for Location03
     *
     * @ElementName Location03
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    public function getLocation03()
    {
        return $this->Location03;
    }

    /**
     * Setter for Location03
     *
     * @ElementName Location03
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null $Location03
     * @return $this
     */
    public function setLocation03(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location03)
    {
        $this->Location03 = $Location03;
        return $this;
    }

    /**
     * Getter for Location04
     *
     * @ElementName Location04
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    public function getLocation04()
    {
        return $this->Location04;
    }

    /**
     * Setter for Location04
     *
     * @ElementName Location04
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null $Location04
     * @return $this
     */
    public function setLocation04(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location04)
    {
        $this->Location04 = $Location04;
        return $this;
    }

    /**
     * Getter for Location05
     *
     * @ElementName Location05
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    public function getLocation05()
    {
        return $this->Location05;
    }

    /**
     * Setter for Location05
     *
     * @ElementName Location05
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null $Location05
     * @return $this
     */
    public function setLocation05(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location05)
    {
        $this->Location05 = $Location05;
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
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

