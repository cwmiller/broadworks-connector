<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetResponse13mp16
 *
 * Response to the UserSequentialRingGetRequest13mp16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule" and "Calls From".
 *         Replaced By: UserSequentialRingGetResponse14sp4
 *
 * @see UserSequentialRingGetRequest13mp16
 * @see UserSequentialRingGetResponse14sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46939","type":"sequence"}]
 */
class UserSequentialRingGetResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName ringBaseLocationFirst
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var bool|null
     */
    protected $ringBaseLocationFirst = null;

    /**
     * @ElementName baseLocationNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null
     */
    protected $baseLocationNumberOfRings = null;

    /**
     * @ElementName continueIfBaseLocationIsBusy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var bool|null
     */
    protected $continueIfBaseLocationIsBusy = null;

    /**
     * @ElementName callerMayStopSearch
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var bool|null
     */
    protected $callerMayStopSearch = null;

    /**
     * @ElementName Location01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    protected $Location01 = null;

    /**
     * @ElementName Location02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    protected $Location02 = null;

    /**
     * @ElementName Location03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    protected $Location03 = null;

    /**
     * @ElementName Location04
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    protected $Location04 = null;

    /**
     * @ElementName Location05
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation|null
     */
    protected $Location05 = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:46939
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     */
    public function getLocation01()
    {
        return $this->Location01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location01;
    }

    /**
     * Setter for Location01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location01
     * @return $this
     */
    public function setLocation01(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location01)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     */
    public function getLocation02()
    {
        return $this->Location02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location02;
    }

    /**
     * Setter for Location02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location02
     * @return $this
     */
    public function setLocation02(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location02)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     */
    public function getLocation03()
    {
        return $this->Location03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location03;
    }

    /**
     * Setter for Location03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location03
     * @return $this
     */
    public function setLocation03(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location03)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     */
    public function getLocation04()
    {
        return $this->Location04 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location04;
    }

    /**
     * Setter for Location04
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location04
     * @return $this
     */
    public function setLocation04(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location04)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation
     */
    public function getLocation05()
    {
        return $this->Location05 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Location05;
    }

    /**
     * Setter for Location05
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location05
     * @return $this
     */
    public function setLocation05(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingLocation $Location05)
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

