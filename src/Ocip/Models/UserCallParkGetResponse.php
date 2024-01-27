<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallParkGetResponse
 *
 * Response to the UserCallParkGetRequest.
 *         Identifies which Call Park group the user belongs to and the list of users in the group.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "User External Id", and "User Place Type".  
 *         The following columns are supported in AS data mode only:
 *           "User External Id", "User Place Type"
 *         The possible values for "User Place Type" are: User, Place.
 *         The users are in the table in the order they will try to be parked on.
 *
 * @see UserCallParkGetRequest
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:565","type":"sequence"}]
 */
class UserCallParkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:565
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:565
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

