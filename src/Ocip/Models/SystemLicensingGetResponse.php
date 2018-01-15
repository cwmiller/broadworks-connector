<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetResponse
 *
 * Response to SystemLicensingGetRequest. The license table columns are: "Name",
 * "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 */
class SystemLicensingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName licenseStrictness
     * @var string|null
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
     * @ElementName licenseTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $licenseTable = null;

    /**
     * Getter for licenseStrictness
     *
     * @ElementName licenseStrictness
     * @return string|null
     */
    public function getLicenseStrictness()
    {
        return $this->licenseStrictness;
    }

    /**
     * Setter for licenseStrictness
     *
     * @ElementName licenseStrictness
     * @param string|null $licenseStrictness
     * @return $this
     */
    public function setLicenseStrictness($licenseStrictness)
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
    public function setHostId($hostId)
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
    public function addHostId($hostId)
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
    public function setLicenseName($licenseName)
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
    public function addLicenseName($licenseName)
    {
        $this->licenseName []= $licenseName;
        return $this;
    }

    /**
     * Getter for licenseTable
     *
     * @ElementName licenseTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLicenseTable()
    {
        return $this->licenseTable;
    }

    /**
     * Setter for licenseTable
     *
     * @ElementName licenseTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $licenseTable
     * @return $this
     */
    public function setLicenseTable($licenseTable)
    {
        $this->licenseTable = $licenseTable;
        return $this;
    }


}

