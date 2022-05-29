<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetResponse
 *
 * Response to SystemLicensingGetRequest. The license table columns are: "Name", "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 *
 * @see SystemLicensingGetRequest
 * @see SystemLicensingGetResponse14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:27451","type":"sequence"}]
 */
class SystemLicensingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName licenseStrictness
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
     * @var \CWM\BroadWorksConnector\Ocip\Models\LicenseStrictness|null
     */
    protected $licenseStrictness = null;

    /**
     * @ElementName groupUserlimit
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
     * @MinInclusive 1
     * @var int|null
     */
    protected $groupUserlimit = null;

    /**
     * @ElementName expirationDate
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
     * @var string|null
     */
    protected $expirationDate = null;

    /**
     * @ElementName hostId
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
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
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
     * @MinLength 1
     * @var string[]
     */
    protected $licenseName = array(
        
    );

    /**
     * @ElementName licenseTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27451
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $licenseTable = null;

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
     * Getter for licenseTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLicenseTable()
    {
        return $this->licenseTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->licenseTable;
    }

    /**
     * Setter for licenseTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $licenseTable
     * @return $this
     */
    public function setLicenseTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $licenseTable)
    {
        $this->licenseTable = $licenseTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLicenseTable()
    {
        $this->licenseTable = null;
        return $this;
    }


}

