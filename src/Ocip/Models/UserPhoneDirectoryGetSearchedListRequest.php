<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetSearchedListRequest
 *
 * Request a table containing the phone directory for a user.
 *         If the specified user is part of an enterprise, the directory includes all users in the enterprise
 *         and all entries in the enterprise common phone list and the common phone list of the specified user's group.
 *         If the specified user is part of a service provider, the directory includes all users in the user's group
 *         and all entries in the common phone list of the specified user's group.
 *         It is possible to search the directory for names containing a specified search string. The search includes
 *         matches on first name or last name or common phone list names.
 *         The response is either UserPhoneDirectoryGetSearchedListResponse or ErrorResponse.
 *
 * @see UserPhoneDirectoryGetSearchedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3203","type":"sequence"}]
 */
class UserPhoneDirectoryGetSearchedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3203
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName nameSearchString
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3203
     * @MinLength 1
     * @var string|null
     */
    protected $nameSearchString = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for nameSearchString
     *
     * @return string
     */
    public function getNameSearchString()
    {
        return $this->nameSearchString instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameSearchString;
    }

    /**
     * Setter for nameSearchString
     *
     * @param string $nameSearchString
     * @return $this
     */
    public function setNameSearchString($nameSearchString)
    {
        $this->nameSearchString = $nameSearchString;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameSearchString()
    {
        $this->nameSearchString = null;
        return $this;
    }


}

