<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLDAPIntegrationGetDirectoryListRequest
 *
 * Request the LDAP entry lists for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryListResponse or
 * an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName searchKey
     * @var string|null
     */
    private $searchKey = null;

    /**
     * @ElementName page
     * @var \CWM\BroadWorksConnector\Ocip\Models\LDAPPage|null
     */
    private $page = null;

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
     * Getter for searchKey
     *
     * @ElementName searchKey
     * @return string|null
     */
    public function getSearchKey()
    {
        return $this->searchKey;
    }

    /**
     * Setter for searchKey
     *
     * @ElementName searchKey
     * @param string|null $searchKey
     * @return $this
     */
    public function setSearchKey($searchKey)
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * Getter for page
     *
     * @ElementName page
     * @return \CWM\BroadWorksConnector\Ocip\Models\LDAPPage|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Setter for page
     *
     * @ElementName page
     * @param \CWM\BroadWorksConnector\Ocip\Models\LDAPPage|null $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }


}

