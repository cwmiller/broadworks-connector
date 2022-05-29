<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse22
 *
 * Response to SystemLicensingGetSystemLicenseListRequest22.
 *         Replaced by: SystemLicensingGetSystemLicenseListResponse22V2.
 *
 * @see SystemLicensingGetSystemLicenseListRequest22
 * @see SystemLicensingGetSystemLicenseListResponse22V2
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:8553","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:8553
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22[]
     */
    protected $license = array(
        
    );

    /**
     * Getter for license
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22[]
     */
    public function getLicense()
    {
        return $this->license instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->license;
    }

    /**
     * Setter for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license[] = $license;
        return $this;
    }


}

