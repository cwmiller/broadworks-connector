<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse19sp1
 *
 * Response to SystemLicensingGetSystemLicenseListRequest19sp1.
 *         
 *         Replaced by: SystemLicensingGetSystemLicenseListRequest21sp1.
 *
 * @see SystemLicensingGetSystemLicenseListRequest19sp1
 * @see SystemLicensingGetSystemLicenseListRequest21sp1
 */
class SystemLicensingGetSystemLicenseListResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType19sp1[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @ElementName license
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType19sp1[]
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Setter for license
     *
     * @ElementName license
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType19sp1[] $license
     * @return $this
     */
    public function setLicense(array $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Adder for license
     *
     * @ElementName license
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType19sp1 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license []= $license;
        return $this;
    }


}

