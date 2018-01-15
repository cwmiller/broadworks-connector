<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementGetInstanceResponse
 *
 * Response to the GroupCallCapacityManagementGetInstanceRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 */
class GroupCallCapacityManagementGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @var int|null
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @var int|null
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName defaultGroupForNewUsers
     * @var bool|null
     */
    private $defaultGroupForNewUsers = null;

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for maxActiveCallsAllowed
     *
     * @ElementName maxActiveCallsAllowed
     * @return int|null
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed;
    }

    /**
     * Setter for maxActiveCallsAllowed
     *
     * @ElementName maxActiveCallsAllowed
     * @param int|null $maxActiveCallsAllowed
     * @return $this
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $this->maxActiveCallsAllowed = $maxActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for maxIncomingActiveCallsAllowed
     *
     * @ElementName maxIncomingActiveCallsAllowed
     * @return int|null
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @ElementName maxIncomingActiveCallsAllowed
     * @param int|null $maxIncomingActiveCallsAllowed
     * @return $this
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for maxOutgoingActiveCallsAllowed
     *
     * @ElementName maxOutgoingActiveCallsAllowed
     * @return int|null
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @ElementName maxOutgoingActiveCallsAllowed
     * @param int|null $maxOutgoingActiveCallsAllowed
     * @return $this
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        return $this;
    }

    /**
     * Getter for defaultGroupForNewUsers
     *
     * @ElementName defaultGroupForNewUsers
     * @return bool|null
     */
    public function getDefaultGroupForNewUsers()
    {
        return $this->defaultGroupForNewUsers;
    }

    /**
     * Setter for defaultGroupForNewUsers
     *
     * @ElementName defaultGroupForNewUsers
     * @param bool|null $defaultGroupForNewUsers
     * @return $this
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers)
    {
        $this->defaultGroupForNewUsers = $defaultGroupForNewUsers;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

