<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetResponse14sp4
 *
 * Response to the UserSimultaneousRingFamilyGetRequest14sp4.
 *         Contains a table with column headings: "Phone Number", "Answer
 * Confirmation Required".
 */
class UserSimultaneousRingFamilyGetResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName incomingCalls
     * @var string|null
     */
    private $incomingCalls = null;

    /**
     * @ElementName phoneNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $phoneNumberTable = null;

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
     * Getter for incomingCalls
     *
     * @ElementName incomingCalls
     * @return string|null
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls;
    }

    /**
     * Setter for incomingCalls
     *
     * @ElementName incomingCalls
     * @param string|null $incomingCalls
     * @return $this
     */
    public function setIncomingCalls($incomingCalls)
    {
        $this->incomingCalls = $incomingCalls;
        return $this;
    }

    /**
     * Getter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable($phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }


}
