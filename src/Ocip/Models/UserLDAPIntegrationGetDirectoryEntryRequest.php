<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLDAPIntegrationGetDirectoryEntryRequest
 *
 * Request one LDAP entry for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryEntryResponse or
 * an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName entryName
     * @var string|null
     */
    private $entryName = null;

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
     * Getter for entryName
     *
     * @ElementName entryName
     * @return string|null
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @ElementName entryName
     * @param string|null $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }


}

