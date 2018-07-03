<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetResponse13mp17
 *
 * Response to UserPrivacyGetRequest13mp17.  The
 *         permittedMonitorUserIdTable contains the members of
 *         the enterprise or group allowed to monitor the phone
 *         status of the user specified in the request.  Members
 *         of this table are allowed to monitor the user even if
 *         enablePhoneStatusPrivacy is set to true.  The table
 *         contains column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserPrivacyGetRequest13
 */
class UserPrivacyGetResponse13mp17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDirectoryPrivacy
     * @var bool|null
     */
    private $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @var bool|null
     */
    private $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @var bool|null
     */
    private $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * @ElementName enablePhoneStatusPrivacy
     * @var bool|null
     */
    private $enablePhoneStatusPrivacy = null;

    /**
     * @ElementName permittedMonitorUserIdTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $permittedMonitorUserIdTable = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @return bool|null
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @param bool|null $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @return bool|null
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @param bool|null $enableAutoAttendantExtensionDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantNameDialingPrivacy
     *
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @return bool|null
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantNameDialingPrivacy
     *
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @param bool|null $enableAutoAttendantNameDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $this->enableAutoAttendantNameDialingPrivacy = $enableAutoAttendantNameDialingPrivacy;
        return $this;
    }

    /**
     * Getter for enablePhoneStatusPrivacy
     *
     * @ElementName enablePhoneStatusPrivacy
     * @return bool|null
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return $this->enablePhoneStatusPrivacy;
    }

    /**
     * Setter for enablePhoneStatusPrivacy
     *
     * @ElementName enablePhoneStatusPrivacy
     * @param bool|null $enablePhoneStatusPrivacy
     * @return $this
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy)
    {
        $this->enablePhoneStatusPrivacy = $enablePhoneStatusPrivacy;
        return $this;
    }

    /**
     * Getter for permittedMonitorUserIdTable
     *
     * @ElementName permittedMonitorUserIdTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPermittedMonitorUserIdTable()
    {
        return $this->permittedMonitorUserIdTable;
    }

    /**
     * Setter for permittedMonitorUserIdTable
     *
     * @ElementName permittedMonitorUserIdTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $permittedMonitorUserIdTable
     * @return $this
     */
    public function setPermittedMonitorUserIdTable($permittedMonitorUserIdTable)
    {
        $this->permittedMonitorUserIdTable = $permittedMonitorUserIdTable;
        return $this;
    }


}

