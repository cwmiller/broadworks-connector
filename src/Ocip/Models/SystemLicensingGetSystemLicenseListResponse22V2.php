<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLicensingGetSystemLicenseListResponse22V2
 *
 * Response to SystemLicensingGetSystemLicenseListRequest22V2.
 *
 * @see SystemLicensingGetSystemLicenseListRequest22V2
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11555","type":"sequence"}]
 */
class SystemLicensingGetSystemLicenseListResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName license
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11555
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemLicenseType22V2[]
     */
    private $license = array(
        
    );

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

