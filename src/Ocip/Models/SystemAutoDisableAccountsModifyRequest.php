<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutoDisableAccountsModifyRequest
 *
 * Modify the Auto Disable Accounts system parameters.  
 *        The response is either a SuccessResponse or ErrorResponse
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2593","type":"sequence"}]
 */
class SystemAutoDisableAccountsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName accountInactivityTimeoutDays
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @MinInclusive 30
     * @MaxInclusive 365
     * @var int|null
     */
    protected $accountInactivityTimeoutDays = null;

    /**
     * @ElementName enableAutoDisableAccounts
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccounts = null;

    /**
     * @ElementName enableAutoDisableAccountsSystemAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsSystemAdminLevel = null;

    /**
     * @ElementName enableAutoDisableAccountsProvisioningAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsProvisioningAdminLevel = null;

    /**
     * @ElementName enableAutoDisableAccountsResellerAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsResellerAdminLevel = null;

    /**
     * @ElementName enableAutoDisableAccountsSvcProviderAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsSvcProviderAdminLevel = null;

    /**
     * @ElementName enableAutoDisableAccountsGroupAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsGroupAdminLevel = null;

    /**
     * @ElementName enableAutoDisableAccountsDepartmentAdminLevel
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2593
     * @var bool|null
     */
    protected $enableAutoDisableAccountsDepartmentAdminLevel = null;

    /**
     * Getter for accountInactivityTimeoutDays
     *
     * @return int
     */
    public function getAccountInactivityTimeoutDays()
    {
        return $this->accountInactivityTimeoutDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountInactivityTimeoutDays;
    }

    /**
     * Setter for accountInactivityTimeoutDays
     *
     * @param int $accountInactivityTimeoutDays
     * @return $this
     */
    public function setAccountInactivityTimeoutDays($accountInactivityTimeoutDays)
    {
        $this->accountInactivityTimeoutDays = $accountInactivityTimeoutDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountInactivityTimeoutDays()
    {
        $this->accountInactivityTimeoutDays = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccounts
     *
     * @return bool
     */
    public function getEnableAutoDisableAccounts()
    {
        return $this->enableAutoDisableAccounts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccounts;
    }

    /**
     * Setter for enableAutoDisableAccounts
     *
     * @param bool $enableAutoDisableAccounts
     * @return $this
     */
    public function setEnableAutoDisableAccounts($enableAutoDisableAccounts)
    {
        $this->enableAutoDisableAccounts = $enableAutoDisableAccounts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccounts()
    {
        $this->enableAutoDisableAccounts = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsSystemAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsSystemAdminLevel()
    {
        return $this->enableAutoDisableAccountsSystemAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsSystemAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsSystemAdminLevel
     *
     * @param bool $enableAutoDisableAccountsSystemAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsSystemAdminLevel($enableAutoDisableAccountsSystemAdminLevel)
    {
        $this->enableAutoDisableAccountsSystemAdminLevel = $enableAutoDisableAccountsSystemAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsSystemAdminLevel()
    {
        $this->enableAutoDisableAccountsSystemAdminLevel = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsProvisioningAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsProvisioningAdminLevel()
    {
        return $this->enableAutoDisableAccountsProvisioningAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsProvisioningAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsProvisioningAdminLevel
     *
     * @param bool $enableAutoDisableAccountsProvisioningAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsProvisioningAdminLevel($enableAutoDisableAccountsProvisioningAdminLevel)
    {
        $this->enableAutoDisableAccountsProvisioningAdminLevel = $enableAutoDisableAccountsProvisioningAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsProvisioningAdminLevel()
    {
        $this->enableAutoDisableAccountsProvisioningAdminLevel = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsResellerAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsResellerAdminLevel()
    {
        return $this->enableAutoDisableAccountsResellerAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsResellerAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsResellerAdminLevel
     *
     * @param bool $enableAutoDisableAccountsResellerAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsResellerAdminLevel($enableAutoDisableAccountsResellerAdminLevel)
    {
        $this->enableAutoDisableAccountsResellerAdminLevel = $enableAutoDisableAccountsResellerAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsResellerAdminLevel()
    {
        $this->enableAutoDisableAccountsResellerAdminLevel = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsSvcProviderAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsSvcProviderAdminLevel()
    {
        return $this->enableAutoDisableAccountsSvcProviderAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsSvcProviderAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsSvcProviderAdminLevel
     *
     * @param bool $enableAutoDisableAccountsSvcProviderAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsSvcProviderAdminLevel($enableAutoDisableAccountsSvcProviderAdminLevel)
    {
        $this->enableAutoDisableAccountsSvcProviderAdminLevel = $enableAutoDisableAccountsSvcProviderAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsSvcProviderAdminLevel()
    {
        $this->enableAutoDisableAccountsSvcProviderAdminLevel = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsGroupAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsGroupAdminLevel()
    {
        return $this->enableAutoDisableAccountsGroupAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsGroupAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsGroupAdminLevel
     *
     * @param bool $enableAutoDisableAccountsGroupAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsGroupAdminLevel($enableAutoDisableAccountsGroupAdminLevel)
    {
        $this->enableAutoDisableAccountsGroupAdminLevel = $enableAutoDisableAccountsGroupAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsGroupAdminLevel()
    {
        $this->enableAutoDisableAccountsGroupAdminLevel = null;
        return $this;
    }

    /**
     * Getter for enableAutoDisableAccountsDepartmentAdminLevel
     *
     * @return bool
     */
    public function getEnableAutoDisableAccountsDepartmentAdminLevel()
    {
        return $this->enableAutoDisableAccountsDepartmentAdminLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoDisableAccountsDepartmentAdminLevel;
    }

    /**
     * Setter for enableAutoDisableAccountsDepartmentAdminLevel
     *
     * @param bool $enableAutoDisableAccountsDepartmentAdminLevel
     * @return $this
     */
    public function setEnableAutoDisableAccountsDepartmentAdminLevel($enableAutoDisableAccountsDepartmentAdminLevel)
    {
        $this->enableAutoDisableAccountsDepartmentAdminLevel = $enableAutoDisableAccountsDepartmentAdminLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoDisableAccountsDepartmentAdminLevel()
    {
        $this->enableAutoDisableAccountsDepartmentAdminLevel = null;
        return $this;
    }
}

