<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse
 *
 * Response to SystemLicensingGetSystemLicenseListRequest.
 *         
 *         Replaced by: SystemLicensingGetSystemLicenseListResponse21 in AS data mode
 *
 * @see SystemLicensingGetSystemLicenseListRequest
 * @see SystemLicensingGetSystemLicenseListResponse21
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:3635","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType
     * @Array
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:3635
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType[]
     */
    private $license = array(
        
    );

    /**
     * Getter for license
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType[]
     */
    public function getLicense()
    {
        return $this->license instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->license;
    }

    /**
     * Setter for license
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType[] $license
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType $license
     * @return $this
     */
    public function addLicense($license)
    {
        $this->license[] = $license;
        return $this;
    }


}

