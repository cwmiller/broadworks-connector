<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetResponse14sp4
 *
 * Response to the UserSimultaneousRingFamilyGetRequest14sp4.
 *         Contains a table with column headings: "Phone Number", "Answer Confirmation Required".
 *
 * @see UserSimultaneousRingFamilyGetRequest14sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47240","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47240
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName incomingCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     * @Group d8f04177e438f303b41c211e518706bf:47240
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection|null
     */
    protected $incomingCalls = null;

    /**
     * @ElementName phoneNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:47240
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $phoneNumberTable = null;

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
     * Getter for incomingCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls
     * @return $this
     */
    public function setIncomingCalls(\CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingSelection $incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCalls()
    {
        $this->incomingCalls = null;
        return $this;
    }

    /**
     * Getter for phoneNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberTable()
    {
        $this->phoneNumberTable = null;
        return $this;
    }
}

