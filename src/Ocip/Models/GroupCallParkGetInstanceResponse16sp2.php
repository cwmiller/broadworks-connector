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
 * @see GroupCallParkGetInstanceRequest16sp2
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    public function getRecallTo()
    {
        return $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @ElementName recallTo
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
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
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

