<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPickupGetResponse
 *
 * Response to the UserCallPickupGetRequest.
 *         Identifies which Call Pickup group the user belongs to and the list of users in the group.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name", "Department", "Phone Number", "Extension", "Email Address".
 *
 * @see UserCallPickupGetRequest
 * @Groups [{"id":"e52f623f7e5f77c5ed7bb6ba0012d5cd:394","type":"sequence"}]
 */
class UserCallPickupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:394
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:394
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }
}

