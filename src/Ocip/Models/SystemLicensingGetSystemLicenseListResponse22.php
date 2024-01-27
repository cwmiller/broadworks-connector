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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10677","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:10677
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22[]
     */
    protected $license = [
        
    ];

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

