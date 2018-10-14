<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse21
 *
 * Response to SystemLicensingGetSystemLicenseListRequest21.
 *         
 *         Replaced by: SystemLicensingGetSystemLicenseListRequest21sp1.
 *
 * @see SystemLicensingGetSystemLicenseListRequest21
 * @see SystemLicensingGetSystemLicenseListRequest21sp1
 */
class SystemLicensingGetSystemLicenseListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @ElementName license
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[]
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Setter for license
     *
     * @ElementName license
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license []= $license;
        return $this;
    }


}

