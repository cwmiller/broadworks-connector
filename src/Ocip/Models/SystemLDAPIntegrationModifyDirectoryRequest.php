<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLDAPIntegrationModifyDirectoryRequest
 *
 * Modify the system level data associated with LDAP Integration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLDAPIntegrationModifyDirectoryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serverNetAddress
     * @var string|null
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName searchBase
     * @var string|null
     */
    private $searchBase = null;

    /**
     * @ElementName useSSL
     * @var bool|null
     */
    private $useSSL = null;

    /**
     * @ElementName requireAuthentication
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName authenticatedDN
     * @var string|null
     */
    private $authenticatedDN = null;

    /**
     * @ElementName authenticatedPassword
     * @var string|null
     */
    private $authenticatedPassword = null;

    /**
     * @ElementName isSortEnabled
     * @var bool|null
     */
    private $isSortEnabled = null;

    /**
     * @ElementName isPagedResultEnabled
     * @var bool|null
     */
    private $isPagedResultEnabled = null;

    /**
     * @ElementName searchFilter
     * @var string|null
     */
    private $searchFilter = null;

    /**
     * @ElementName includeSearchAttributeInSearchFilter
     * @var bool|null
     */
    private $includeSearchAttributeInSearchFilter = null;

    /**
     * @ElementName column1AttributeName
     * @var string|null
     */
    private $column1AttributeName = null;

    /**
     * @ElementName column2AttributeName
     * @var string|null
     */
    private $column2AttributeName = null;

    /**
     * @ElementName column3AttributeName
     * @var string|null
     */
    private $column3AttributeName = null;

    /**
     * @ElementName column4AttributeName
     * @var string|null
     */
    private $column4AttributeName = null;

    /**
     * @ElementName column1Label
     * @var string|null
     */
    private $column1Label = null;

    /**
     * @ElementName column2Label
     * @var string|null
     */
    private $column2Label = null;

    /**
     * @ElementName column3Label
     * @var string|null
     */
    private $column3Label = null;

    /**
     * @ElementName column4Label
     * @var string|null
     */
    private $column4Label = null;

    /**
     * @ElementName searchColumn
     * @var int|null
     */
    private $searchColumn = null;

    /**
     * Getter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @return string|null
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @param string|null $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        $this->serverNetAddress = $serverNetAddress;
        return $this;
    }

    /**
     * Getter for serverPort
     *
     * @ElementName serverPort
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @ElementName serverPort
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * Getter for searchBase
     *
     * @ElementName searchBase
     * @return string|null
     */
    public function getSearchBase()
    {
        return $this->searchBase;
    }

    /**
     * Setter for searchBase
     *
     * @ElementName searchBase
     * @param string|null $searchBase
     * @return $this
     */
    public function setSearchBase($searchBase)
    {
        $this->searchBase = $searchBase;
        return $this;
    }

    /**
     * Getter for useSSL
     *
     * @ElementName useSSL
     * @return bool|null
     */
    public function getUseSSL()
    {
        return $this->useSSL;
    }

    /**
     * Setter for useSSL
     *
     * @ElementName useSSL
     * @param bool|null $useSSL
     * @return $this
     */
    public function setUseSSL($useSSL)
    {
        $this->useSSL = $useSSL;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @return bool|null
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @ElementName requireAuthentication
     * @param bool|null $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * Getter for authenticatedDN
     *
     * @ElementName authenticatedDN
     * @return string|null
     */
    public function getAuthenticatedDN()
    {
        return $this->authenticatedDN;
    }

    /**
     * Setter for authenticatedDN
     *
     * @ElementName authenticatedDN
     * @param string|null $authenticatedDN
     * @return $this
     */
    public function setAuthenticatedDN($authenticatedDN)
    {
        $this->authenticatedDN = $authenticatedDN;
        return $this;
    }

    /**
     * Getter for authenticatedPassword
     *
     * @ElementName authenticatedPassword
     * @return string|null
     */
    public function getAuthenticatedPassword()
    {
        return $this->authenticatedPassword;
    }

    /**
     * Setter for authenticatedPassword
     *
     * @ElementName authenticatedPassword
     * @param string|null $authenticatedPassword
     * @return $this
     */
    public function setAuthenticatedPassword($authenticatedPassword)
    {
        $this->authenticatedPassword = $authenticatedPassword;
        return $this;
    }

    /**
     * Getter for isSortEnabled
     *
     * @ElementName isSortEnabled
     * @return bool|null
     */
    public function getIsSortEnabled()
    {
        return $this->isSortEnabled;
    }

    /**
     * Setter for isSortEnabled
     *
     * @ElementName isSortEnabled
     * @param bool|null $isSortEnabled
     * @return $this
     */
    public function setIsSortEnabled($isSortEnabled)
    {
        $this->isSortEnabled = $isSortEnabled;
        return $this;
    }

    /**
     * Getter for isPagedResultEnabled
     *
     * @ElementName isPagedResultEnabled
     * @return bool|null
     */
    public function getIsPagedResultEnabled()
    {
        return $this->isPagedResultEnabled;
    }

    /**
     * Setter for isPagedResultEnabled
     *
     * @ElementName isPagedResultEnabled
     * @param bool|null $isPagedResultEnabled
     * @return $this
     */
    public function setIsPagedResultEnabled($isPagedResultEnabled)
    {
        $this->isPagedResultEnabled = $isPagedResultEnabled;
        return $this;
    }

    /**
     * Getter for searchFilter
     *
     * @ElementName searchFilter
     * @return string|null
     */
    public function getSearchFilter()
    {
        return $this->searchFilter;
    }

    /**
     * Setter for searchFilter
     *
     * @ElementName searchFilter
     * @param string|null $searchFilter
     * @return $this
     */
    public function setSearchFilter($searchFilter)
    {
        $this->searchFilter = $searchFilter;
        return $this;
    }

    /**
     * Getter for includeSearchAttributeInSearchFilter
     *
     * @ElementName includeSearchAttributeInSearchFilter
     * @return bool|null
     */
    public function getIncludeSearchAttributeInSearchFilter()
    {
        return $this->includeSearchAttributeInSearchFilter;
    }

    /**
     * Setter for includeSearchAttributeInSearchFilter
     *
     * @ElementName includeSearchAttributeInSearchFilter
     * @param bool|null $includeSearchAttributeInSearchFilter
     * @return $this
     */
    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter)
    {
        $this->includeSearchAttributeInSearchFilter = $includeSearchAttributeInSearchFilter;
        return $this;
    }

    /**
     * Getter for column1AttributeName
     *
     * @ElementName column1AttributeName
     * @return string|null
     */
    public function getColumn1AttributeName()
    {
        return $this->column1AttributeName;
    }

    /**
     * Setter for column1AttributeName
     *
     * @ElementName column1AttributeName
     * @param string|null $column1AttributeName
     * @return $this
     */
    public function setColumn1AttributeName($column1AttributeName)
    {
        $this->column1AttributeName = $column1AttributeName;
        return $this;
    }

    /**
     * Getter for column2AttributeName
     *
     * @ElementName column2AttributeName
     * @return string|null
     */
    public function getColumn2AttributeName()
    {
        return $this->column2AttributeName;
    }

    /**
     * Setter for column2AttributeName
     *
     * @ElementName column2AttributeName
     * @param string|null $column2AttributeName
     * @return $this
     */
    public function setColumn2AttributeName($column2AttributeName)
    {
        $this->column2AttributeName = $column2AttributeName;
        return $this;
    }

    /**
     * Getter for column3AttributeName
     *
     * @ElementName column3AttributeName
     * @return string|null
     */
    public function getColumn3AttributeName()
    {
        return $this->column3AttributeName;
    }

    /**
     * Setter for column3AttributeName
     *
     * @ElementName column3AttributeName
     * @param string|null $column3AttributeName
     * @return $this
     */
    public function setColumn3AttributeName($column3AttributeName)
    {
        $this->column3AttributeName = $column3AttributeName;
        return $this;
    }

    /**
     * Getter for column4AttributeName
     *
     * @ElementName column4AttributeName
     * @return string|null
     */
    public function getColumn4AttributeName()
    {
        return $this->column4AttributeName;
    }

    /**
     * Setter for column4AttributeName
     *
     * @ElementName column4AttributeName
     * @param string|null $column4AttributeName
     * @return $this
     */
    public function setColumn4AttributeName($column4AttributeName)
    {
        $this->column4AttributeName = $column4AttributeName;
        return $this;
    }

    /**
     * Getter for column1Label
     *
     * @ElementName column1Label
     * @return string|null
     */
    public function getColumn1Label()
    {
        return $this->column1Label;
    }

    /**
     * Setter for column1Label
     *
     * @ElementName column1Label
     * @param string|null $column1Label
     * @return $this
     */
    public function setColumn1Label($column1Label)
    {
        $this->column1Label = $column1Label;
        return $this;
    }

    /**
     * Getter for column2Label
     *
     * @ElementName column2Label
     * @return string|null
     */
    public function getColumn2Label()
    {
        return $this->column2Label;
    }

    /**
     * Setter for column2Label
     *
     * @ElementName column2Label
     * @param string|null $column2Label
     * @return $this
     */
    public function setColumn2Label($column2Label)
    {
        $this->column2Label = $column2Label;
        return $this;
    }

    /**
     * Getter for column3Label
     *
     * @ElementName column3Label
     * @return string|null
     */
    public function getColumn3Label()
    {
        return $this->column3Label;
    }

    /**
     * Setter for column3Label
     *
     * @ElementName column3Label
     * @param string|null $column3Label
     * @return $this
     */
    public function setColumn3Label($column3Label)
    {
        $this->column3Label = $column3Label;
        return $this;
    }

    /**
     * Getter for column4Label
     *
     * @ElementName column4Label
     * @return string|null
     */
    public function getColumn4Label()
    {
        return $this->column4Label;
    }

    /**
     * Setter for column4Label
     *
     * @ElementName column4Label
     * @param string|null $column4Label
     * @return $this
     */
    public function setColumn4Label($column4Label)
    {
        $this->column4Label = $column4Label;
        return $this;
    }

    /**
     * Getter for searchColumn
     *
     * @ElementName searchColumn
     * @return int|null
     */
    public function getSearchColumn()
    {
        return $this->searchColumn;
    }

    /**
     * Setter for searchColumn
     *
     * @ElementName searchColumn
     * @param int|null $searchColumn
     * @return $this
     */
    public function setSearchColumn($searchColumn)
    {
        $this->searchColumn = $searchColumn;
        return $this;
    }


}

