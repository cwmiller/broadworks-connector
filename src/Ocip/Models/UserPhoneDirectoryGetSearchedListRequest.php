<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetSearchedListRequest
 *
 * Request a table containing the phone directory for a user.
 *         If the specified user is part of an enterprise, the directory includes
 * all users in the enterprise
 *         and all entries in the enterprise common phone list and the common phone
 * list of the specified user's group.
 *         If the specified user is part of a service provider, the directory
 * includes all users in the user's group
 *         and all entries in the common phone list of the specified user's group.
 *         It is possible to search the directory for names containing a specified
 * search string. The search includes
 *         matches on first name or last name or common phone list names.
 *         The response is either UserPhoneDirectoryGetSearchedListResponse or
 * ErrorResponse.
 */
class UserPhoneDirectoryGetSearchedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nameSearchString
     * @var string|null
     */
    private $nameSearchString = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for nameSearchString
     *
     * @ElementName nameSearchString
     * @return string|null
     */
    public function getNameSearchString()
    {
        return $this->nameSearchString;
    }

    /**
     * Setter for nameSearchString
     *
     * @ElementName nameSearchString
     * @param string|null $nameSearchString
     * @return $this
     */
    public function setNameSearchString($nameSearchString)
    {
        $this->nameSearchString = $nameSearchString;
        return $this;
    }


}

