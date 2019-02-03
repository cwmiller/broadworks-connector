<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse21sp1
 *
 * Response to SystemLicensingGetSystemLicenseListRequest21sp1.
 *         
 *         Replaced by: SystemLicensingGetSystemLicenseListRequest22.
 *
 * @see SystemLicensingGetSystemLicenseListRequest21sp1
 * @see SystemLicensingGetSystemLicenseListRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3248","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3248
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[]
     */
    public function getLicense()
    {
        return $this->license instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->license;
    }

    /**
     * Setter for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType21sp1 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license[] = $license;
        return $this;
    }


}

