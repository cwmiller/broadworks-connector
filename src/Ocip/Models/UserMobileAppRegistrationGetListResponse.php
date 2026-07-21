<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMobileAppRegistrationGetListResponse
 *
 * Response to UserMobileAppRegistrationGetListRequest. The response contains a table with all the registrations
 *         per user or with only one row if the request is for a specific registration.  The table column headings are: 
 *         "Registration ID", "Application ID", "Application Version", "Device Identifier", "Device OS Type", "Notification Mechanism", "Expiration Date".
 *         
 *         Expiration Date uses the format "yyyy-MM-dd'T'HH:mm:ss.SSSZ" in the time zone of the requested user.
 *         Example: 2010-10-01T09:30:00:000-0400.
 *
 * @see UserMobileAppRegistrationGetListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2567","type":"sequence"}]
 */
class UserMobileAppRegistrationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2567
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName mobileAppRegistrationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2567
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $mobileAppRegistrationTable = null;

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
     * Getter for mobileAppRegistrationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileAppRegistrationTable()
    {
        return $this->mobileAppRegistrationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileAppRegistrationTable;
    }

    /**
     * Setter for mobileAppRegistrationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileAppRegistrationTable
     * @return $this
     */
    public function setMobileAppRegistrationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileAppRegistrationTable)
    {
        $this->mobileAppRegistrationTable = $mobileAppRegistrationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileAppRegistrationTable()
    {
        $this->mobileAppRegistrationTable = null;
        return $this;
    }
}

