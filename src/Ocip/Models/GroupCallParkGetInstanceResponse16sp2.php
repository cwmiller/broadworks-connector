<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetInstanceResponse16sp2
 *
 * Response to the GroupCallParkGetInstanceRequest16sp2.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address".  
 *         The users are in the table are in the order they will try to be parked on.
 *
 * @see GroupCallParkGetInstanceRequest16sp2
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:439","type":"sequence"}]
 */
class GroupCallParkGetInstanceResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName recallAlternateUserId
     * @Type string
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:439
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $recallAlternateUserId = null;

    /**
     * @ElementName recallTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:439
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    protected $recallTo = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:439
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for recallAlternateUserId
     *
     * @return string
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @param string $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallAlternateUserId()
    {
        $this->recallAlternateUserId = null;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTo()
    {
        $this->recallTo = null;
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

