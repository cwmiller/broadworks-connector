<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse
 *
 * Response to SystemLicensingGetSystemLicenseListRequest.
 *         
 *         Replaced by: SystemLicensingGetSystemLicenseListResponse21 in AS data
 * mode
 *
 * @see SystemLicensingGetSystemLicenseListRequest
 * @see SystemLicensingGetSystemLicenseListResponse21
 */
class SystemLicensingGetSystemLicenseListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @var string[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @ElementName license
     * @return string[]
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Setter for license
     *
     * @ElementName license
     * @param string[] $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Adder for license
     *
     * @ElementName license
     * @param string $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license []= $license;
        return $this;
    }


}

