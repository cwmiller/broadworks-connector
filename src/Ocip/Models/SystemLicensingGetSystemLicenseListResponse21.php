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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[]
     */
    public function getLicense()
    {
        return $this->license instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->license;
    }

    /**
     * Setter for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21[] $license
     * @return $this
     */
    public function setLicense(array $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLicense()
    {
        $this->license = null;
        return $this;
    }

    /**
     * Adder for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license[] = $license;
        return $this;
    }


}

