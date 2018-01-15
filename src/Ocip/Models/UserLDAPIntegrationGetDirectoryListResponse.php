<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLDAPIntegrationGetDirectoryListResponse
 *
 * Response to UserLDAPIntegrationGetDirectoryListRequest. The table is a 4 column
 * table.
 *         The column headings are defined by the group's LDAP settings.
 */
class UserLDAPIntegrationGetDirectoryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName ldapEntryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $ldapEntryTable = null;

    /**
     * @ElementName searchLabel
     * @var string|null
     */
    private $searchLabel = null;

    /**
     * @ElementName hasMoreEntries
     * @var bool|null
     */
    private $hasMoreEntries = null;

    /**
     * @ElementName lastPageNumber
     * @var int|null
     */
    private $lastPageNumber = null;

    /**
     * Getter for ldapEntryTable
     *
     * @ElementName ldapEntryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLdapEntryTable()
    {
        return $this->ldapEntryTable;
    }

    /**
     * Setter for ldapEntryTable
     *
     * @ElementName ldapEntryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $ldapEntryTable
     * @return $this
     */
    public function setLdapEntryTable($ldapEntryTable)
    {
        $this->ldapEntryTable = $ldapEntryTable;
        return $this;
    }

    /**
     * Getter for searchLabel
     *
     * @ElementName searchLabel
     * @return string|null
     */
    public function getSearchLabel()
    {
        return $this->searchLabel;
    }

    /**
     * Setter for searchLabel
     *
     * @ElementName searchLabel
     * @param string|null $searchLabel
     * @return $this
     */
    public function setSearchLabel($searchLabel)
    {
        $this->searchLabel = $searchLabel;
        return $this;
    }

    /**
     * Getter for hasMoreEntries
     *
     * @ElementName hasMoreEntries
     * @return bool|null
     */
    public function getHasMoreEntries()
    {
        return $this->hasMoreEntries;
    }

    /**
     * Setter for hasMoreEntries
     *
     * @ElementName hasMoreEntries
     * @param bool|null $hasMoreEntries
     * @return $this
     */
    public function setHasMoreEntries($hasMoreEntries)
    {
        $this->hasMoreEntries = $hasMoreEntries;
        return $this;
    }

    /**
     * Getter for lastPageNumber
     *
     * @ElementName lastPageNumber
     * @return int|null
     */
    public function getLastPageNumber()
    {
        return $this->lastPageNumber;
    }

    /**
     * Setter for lastPageNumber
     *
     * @ElementName lastPageNumber
     * @param int|null $lastPageNumber
     * @return $this
     */
    public function setLastPageNumber($lastPageNumber)
    {
        $this->lastPageNumber = $lastPageNumber;
        return $this;
    }


}

