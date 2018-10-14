<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetResponse14sp3
 *
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns
 * are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used"
 * and "Available".
 *         The virtual service license table columns are: "Name", "Licensed",
 * "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used",
 * "Used By Hosted Users", "Used By Trunk Users", "Available" and "Expiration
 * Date".
 *         The system param license table columns are: "Name", "Licensed", "Used",
 * Available".
 *
 * @see SystemLicensingGetRequest14sp3
 */
class SystemLicensingGetResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName licenseStrictness
     * @var \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness|null
     */
    private $licenseStrictness = null;

    /**
     * @ElementName groupUserlimit
     * @var int|null
     */
    private $groupUserlimit = null;

    /**
     * @ElementName expirationDate
     * @var string|null
     */
    private $expirationDate = null;

    /**
     * @ElementName hostId
     * @var string[]
     */
    private $hostId = array(
        
    );

    /**
     * @ElementName licenseName
     * @var string[]
     */
    private $licenseName = array(
        
    );

    /**
     * @ElementName numberOfTrunkUsers
     * @var int|null
     */
    private $numberOfTrunkUsers = null;

    /**
     * @ElementName subscriberLicenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $subscriberLicenseTable = null;

    /**
     * @ElementName groupServiceLicenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupServiceLicenseTable = null;

    /**
     * @ElementName virtualServiceLicenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $virtualServiceLicenseTable = null;

    /**
     * @ElementName userServiceLicenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServiceLicenseTable = null;

    /**
     * @ElementName systemParamLicenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemParamLicenseTable = null;

    /**
     * Getter for licenseStrictness
     *
     * @ElementName licenseStrictness
     * @return \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness|null
     */
    public function getLicenseStrictness()
    {
        return $this->licenseStrictness;
    }

    /**
     * Setter for licenseStrictness
     *
     * @ElementName licenseStrictness
     * @param \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness|null $licenseStrictness
     * @return $this
     */
    public function setLicenseStrictness(\CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness $licenseStrictness)
    {
        $this->licenseStrictness = $licenseStrictness;
        return $this;
    }

    /**
     * Getter for groupUserlimit
     *
     * @ElementName groupUserlimit
     * @return int|null
     */
    public function getGroupUserlimit()
    {
        return $this->groupUserlimit;
    }

    /**
     * Setter for groupUserlimit
     *
     * @ElementName groupUserlimit
     * @param int|null $groupUserlimit
     * @return $this
     */
    public function setGroupUserlimit($groupUserlimit)
    {
        $this->groupUserlimit = $groupUserlimit;
        return $this;
    }

    /**
     * Getter for expirationDate
     *
     * @ElementName expirationDate
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Setter for expirationDate
     *
     * @ElementName expirationDate
     * @param string|null $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Getter for hostId
     *
     * @ElementName hostId
     * @return string[]
     */
    public function getHostId()
    {
        return $this->hostId;
    }

    /**
     * Setter for hostId
     *
     * @ElementName hostId
     * @param string[] $hostId
     * @return $this
     */
    public function setHostId(array $hostId)
    {
        $this->hostId = $hostId;
        return $this;
    }

    /**
     * Adder for hostId
     *
     * @ElementName hostId
     * @param string $hostId
     * @return $this
     */
    public function addHostId(string $hostId)
    {
        $this->hostId []= $hostId;
        return $this;
    }

    /**
     * Getter for licenseName
     *
     * @ElementName licenseName
     * @return string[]
     */
    public function getLicenseName()
    {
        return $this->licenseName;
    }

    /**
     * Setter for licenseName
     *
     * @ElementName licenseName
     * @param string[] $licenseName
     * @return $this
     */
    public function setLicenseName(array $licenseName)
    {
        $this->licenseName = $licenseName;
        return $this;
    }

    /**
     * Adder for licenseName
     *
     * @ElementName licenseName
     * @param string $licenseName
     * @return $this
     */
    public function addLicenseName(string $licenseName)
    {
        $this->licenseName []= $licenseName;
        return $this;
    }

    /**
     * Getter for numberOfTrunkUsers
     *
     * @ElementName numberOfTrunkUsers
     * @return int|null
     */
    public function getNumberOfTrunkUsers()
    {
        return $this->numberOfTrunkUsers;
    }

    /**
     * Setter for numberOfTrunkUsers
     *
     * @ElementName numberOfTrunkUsers
     * @param int|null $numberOfTrunkUsers
     * @return $this
     */
    public function setNumberOfTrunkUsers($numberOfTrunkUsers)
    {
        $this->numberOfTrunkUsers = $numberOfTrunkUsers;
        return $this;
    }

    /**
     * Getter for subscriberLicenseTable
     *
     * @ElementName subscriberLicenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSubscriberLicenseTable()
    {
        return $this->subscriberLicenseTable;
    }

    /**
     * Setter for subscriberLicenseTable
     *
     * @ElementName subscriberLicenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $subscriberLicenseTable
     * @return $this
     */
    public function setSubscriberLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $subscriberLicenseTable)
    {
        $this->subscriberLicenseTable = $subscriberLicenseTable;
        return $this;
    }

    /**
     * Getter for groupServiceLicenseTable
     *
     * @ElementName groupServiceLicenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupServiceLicenseTable()
    {
        return $this->groupServiceLicenseTable;
    }

    /**
     * Setter for groupServiceLicenseTable
     *
     * @ElementName groupServiceLicenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupServiceLicenseTable
     * @return $this
     */
    public function setGroupServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServiceLicenseTable)
    {
        $this->groupServiceLicenseTable = $groupServiceLicenseTable;
        return $this;
    }

    /**
     * Getter for virtualServiceLicenseTable
     *
     * @ElementName virtualServiceLicenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getVirtualServiceLicenseTable()
    {
        return $this->virtualServiceLicenseTable;
    }

    /**
     * Setter for virtualServiceLicenseTable
     *
     * @ElementName virtualServiceLicenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $virtualServiceLicenseTable
     * @return $this
     */
    public function setVirtualServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $virtualServiceLicenseTable)
    {
        $this->virtualServiceLicenseTable = $virtualServiceLicenseTable;
        return $this;
    }

    /**
     * Getter for userServiceLicenseTable
     *
     * @ElementName userServiceLicenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserServiceLicenseTable()
    {
        return $this->userServiceLicenseTable;
    }

    /**
     * Setter for userServiceLicenseTable
     *
     * @ElementName userServiceLicenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userServiceLicenseTable
     * @return $this
     */
    public function setUserServiceLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServiceLicenseTable)
    {
        $this->userServiceLicenseTable = $userServiceLicenseTable;
        return $this;
    }

    /**
     * Getter for systemParamLicenseTable
     *
     * @ElementName systemParamLicenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSystemParamLicenseTable()
    {
        return $this->systemParamLicenseTable;
    }

    /**
     * Setter for systemParamLicenseTable
     *
     * @ElementName systemParamLicenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $systemParamLicenseTable
     * @return $this
     */
    public function setSystemParamLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemParamLicenseTable)
    {
        $this->systemParamLicenseTable = $systemParamLicenseTable;
        return $this;
    }


}

