<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetResponse14sp3
 *
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The virtual service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used", "Available", "Used By Hosted Users", "Used By Trunk Users", and "Expiration Date".
 *         The system param license table columns are: "Name", "Licensed", "Used", Available".
 *
 * @see SystemLicensingGetRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:27475","type":"sequence"}]
 */
class SystemLicensingGetResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName licenseStrictness
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness|null
     */
    protected $licenseStrictness = null;

    /**
     * @ElementName groupUserlimit
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @MinInclusive 1
     * @var int|null
     */
    protected $groupUserlimit = null;

    /**
     * @ElementName expirationDate
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var string|null
     */
    protected $expirationDate = null;

    /**
     * @ElementName hostId
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @MinLength 1
     * @var string[]
     */
    protected $hostId = array(
        
    );

    /**
     * @ElementName licenseName
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @MinLength 1
     * @var string[]
     */
    protected $licenseName = array(
        
    );

    /**
     * @ElementName numberOfTrunkUsers
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var int|null
     */
    protected $numberOfTrunkUsers = null;

    /**
     * @ElementName subscriberLicenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $subscriberLicenseTable = null;

    /**
     * @ElementName groupServiceLicenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupServiceLicenseTable = null;

    /**
     * @ElementName virtualServiceLicenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $virtualServiceLicenseTable = null;

    /**
     * @ElementName userServiceLicenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userServiceLicenseTable = null;

    /**
     * @ElementName systemParamLicenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27475
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $systemParamLicenseTable = null;

    /**
     * Getter for licenseStrictness
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness
     */
    public function getLicenseStrictness()
    {
        return $this->licenseStrictness instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->licenseStrictness;
    }

    /**
     * Setter for licenseStrictness
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness $licenseStrictness
     * @return $this
     */
    public function setLicenseStrictness(\CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness $licenseStrictness)
    {
        $this->licenseStrictness = $licenseStrictness;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLicenseStrictness()
    {
        $this->licenseStrictness = null;
        return $this;
    }

    /**
     * Getter for groupUserlimit
     *
     * @return int
     */
    public function getGroupUserlimit()
    {
        return $this->groupUserlimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserlimit;
    }

    /**
     * Setter for groupUserlimit
     *
     * @param int $groupUserlimit
     * @return $this
     */
    public function setGroupUserlimit($groupUserlimit)
    {
        $this->groupUserlimit = $groupUserlimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserlimit()
    {
        $this->groupUserlimit = null;
        return $this;
    }

    /**
     * Getter for expirationDate
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expirationDate;
    }

    /**
     * Setter for expirationDate
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpirationDate()
    {
        $this->expirationDate = null;
        return $this;
    }

    /**
     * Getter for hostId
     *
     * @return string[]
     */
    public function getHostId()
    {
        return $this->hostId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostId;
    }

    /**
     * Setter for hostId
     *
     * @param string[] $hostId
     * @return $this
     */
    public function setHostId(array $hostId)
    {
        $this->hostId = $hostId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostId()
    {
        $this->hostId = null;
        return $this;
    }

    /**
     * Adder for hostId
     *
     * @param string $hostId
     * @return $this
     */
    public function addHostId(string $hostId)
    {
        $this->hostId[] = $hostId;
        return $this;
    }

    /**
     * Getter for licenseName
     *
     * @return string[]
     */
    public function getLicenseName()
    {
        return $this->licenseName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->licenseName;
    }

    /**
     * Setter for licenseName
     *
     * @param string[] $licenseName
     * @return $this
     */
    public function setLicenseName(array $licenseName)
    {
        $this->licenseName = $licenseName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLicenseName()
    {
        $this->licenseName = null;
        return $this;
    }

    /**
     * Adder for licenseName
     *
     * @param string $licenseName
     * @return $this
     */
    public function addLicenseName(string $licenseName)
    {
        $this->licenseName[] = $licenseName;
        return $this;
    }

    /**
     * Getter for numberOfTrunkUsers
     *
     * @return int
     */
    public function getNumberOfTrunkUsers()
    {
        return $this->numberOfTrunkUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfTrunkUsers;
    }

    /**
     * Setter for numberOfTrunkUsers
     *
     * @param int $numberOfTrunkUsers
     * @return $this
     */
    public function setNumberOfTrunkUsers($numberOfTrunkUsers)
    {
        $this->numberOfTrunkUsers = $numberOfTrunkUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfTrunkUsers()
    {
        $this->numberOfTrunkUsers = null;
        return $this;
    }

    /**
     * Getter for subscriberLicenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSubscriberLicenseTable()
    {
        return $this->subscriberLicenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberLicenseTable;
    }

    /**
     * Setter for subscriberLicenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $subscriberLicenseTable
     * @return $this
     */
    public function setSubscriberLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $subscriberLicenseTable)
    {
        $this->subscriberLicenseTable = $subscriberLicenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberLicenseTable()
    {
        $this->subscriberLicenseTable = null;
        return $this;
    }

    /**
     * Getter for groupServiceLicenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupServiceLicenseTable()
    {
        return $this->groupServiceLicenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceLicenseTable;
    }

    /**
     * Setter for groupServiceLicenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServiceLicenseTable
     * @return $this
     */
    public function setGroupServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServiceLicenseTable)
    {
        $this->groupServiceLicenseTable = $groupServiceLicenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceLicenseTable()
    {
        $this->groupServiceLicenseTable = null;
        return $this;
    }

    /**
     * Getter for virtualServiceLicenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getVirtualServiceLicenseTable()
    {
        return $this->virtualServiceLicenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualServiceLicenseTable;
    }

    /**
     * Setter for virtualServiceLicenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $virtualServiceLicenseTable
     * @return $this
     */
    public function setVirtualServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $virtualServiceLicenseTable)
    {
        $this->virtualServiceLicenseTable = $virtualServiceLicenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualServiceLicenseTable()
    {
        $this->virtualServiceLicenseTable = null;
        return $this;
    }

    /**
     * Getter for userServiceLicenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserServiceLicenseTable()
    {
        return $this->userServiceLicenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceLicenseTable;
    }

    /**
     * Setter for userServiceLicenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServiceLicenseTable
     * @return $this
     */
    public function setUserServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServiceLicenseTable)
    {
        $this->userServiceLicenseTable = $userServiceLicenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceLicenseTable()
    {
        $this->userServiceLicenseTable = null;
        return $this;
    }

    /**
     * Getter for systemParamLicenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSystemParamLicenseTable()
    {
        return $this->systemParamLicenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemParamLicenseTable;
    }

    /**
     * Setter for systemParamLicenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemParamLicenseTable
     * @return $this
     */
    public function setSystemParamLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemParamLicenseTable)
    {
        $this->systemParamLicenseTable = $systemParamLicenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemParamLicenseTable()
    {
        $this->systemParamLicenseTable = null;
        return $this;
    }


}

