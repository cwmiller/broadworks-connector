<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetInstanceResponse16sp2
 *
 * Response to the GroupCallParkGetInstanceRequest16sp2.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email
 * Address".  
 *         The users are in the table are in the order they will try to be parked
 * on.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallTo
 */
class GroupCallParkGetInstanceResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recallAlternateUserId
     * @var string|null
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallTo
     * @var string|null
     */
    private $recallTo = null;

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @return string|null
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @param string|null $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @ElementName recallTo
     * @return string|null
     */
    public function getRecallTo()
    {
        return $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @ElementName recallTo
     * @param string|null $recallTo
     * @return $this
     */
    public function setRecallTo($recallTo)
    {
        $this->recallTo = $recallTo;
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

