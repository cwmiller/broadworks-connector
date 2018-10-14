<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse21sp1
 *
 * Response to SystemLicensingGetSystemLicenseListRequest21sp1.
 *
 * @see SystemLicensingGetSystemLicenseListRequest21sp1
 */
class SystemLicensingGetSystemLicenseListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @ElementName license
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[]
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Setter for license
     *
     * @ElementName license
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license []= $license;
        return $this;
    }


}

