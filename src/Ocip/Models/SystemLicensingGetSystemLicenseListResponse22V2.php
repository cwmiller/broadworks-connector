<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse22V2
 *
 * Response to SystemLicensingGetSystemLicenseListRequest22V2.
 *
 * @see SystemLicensingGetSystemLicenseListRequest22V2
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11674","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11674
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2[]
     */
    protected $license = [
        
    ];

    /**
     * Getter for license
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2[]
     */
    public function getLicense()
    {
        return $this->license instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->license;
    }

    /**
     * Setter for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2 $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license[] = $license;
        return $this;
    }
}

