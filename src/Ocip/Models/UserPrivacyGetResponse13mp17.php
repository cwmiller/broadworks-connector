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
 * @see UserPrivacyGetRequest13mp17
 * @Groups [{"id":"b87b6355d5858fdbeb8c1eb05dc1651a:169","type":"sequence"}]
 */
class UserPrivacyGetResponse13mp17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:169
     * @var bool|null
     */
    protected $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @Type bool
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:169
     * @var bool|null
     */
    protected $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @Type bool
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:169
     * @var bool|null
     */
    protected $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * @ElementName enablePhoneStatusPrivacy
     * @Type bool
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:169
     * @var bool|null
     */
    protected $enablePhoneStatusPrivacy = null;

    /**
     * @ElementName permittedMonitorUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:169
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $permittedMonitorUserIdTable = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @return bool
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @param bool $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDirectoryPrivacy()
    {
        $this->enableDirectoryPrivacy = null;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @return bool
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @param bool $enableAutoAttendantExtensionDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoAttendantExtensionDialingPrivacy()
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = null;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantNameDialingPrivacy
     *
     * @return bool
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantNameDialingPrivacy
     *
     * @param bool $enableAutoAttendantNameDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $this->enableAutoAttendantNameDialingPrivacy = $enableAutoAttendantNameDialingPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoAttendantNameDialingPrivacy()
    {
        $this->enableAutoAttendantNameDialingPrivacy = null;
        return $this;
    }

    /**
     * Getter for enablePhoneStatusPrivacy
     *
     * @return bool
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return $this->enablePhoneStatusPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePhoneStatusPrivacy;
    }

    /**
     * Setter for enablePhoneStatusPrivacy
     *
     * @param bool $enablePhoneStatusPrivacy
     * @return $this
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy)
    {
        $this->enablePhoneStatusPrivacy = $enablePhoneStatusPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePhoneStatusPrivacy()
    {
        $this->enablePhoneStatusPrivacy = null;
        return $this;
    }

    /**
     * Getter for permittedMonitorUserIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPermittedMonitorUserIdTable()
    {
        return $this->permittedMonitorUserIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permittedMonitorUserIdTable;
    }

    /**
     * Setter for permittedMonitorUserIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $permittedMonitorUserIdTable
     * @return $this
     */
    public function setPermittedMonitorUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $permittedMonitorUserIdTable)
    {
        $this->permittedMonitorUserIdTable = $permittedMonitorUserIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermittedMonitorUserIdTable()
    {
        $this->permittedMonitorUserIdTable = null;
        return $this;
    }


}

