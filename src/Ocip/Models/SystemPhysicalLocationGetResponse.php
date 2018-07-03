<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPhysicalLocationGetResponse
 *
 * Response to SystemPhysicalLocationGetRequest.
 *         Contains a list of system Physical Location parameters.
 *
 * @see SystemPhysicalLocationGetRequest
 */
class SystemPhysicalLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alwaysAllowEmergencyCalls
     * @var bool|null
     */
    private $alwaysAllowEmergencyCalls = null;

    /**
     * Getter for alwaysAllowEmergencyCalls
     *
     * @ElementName alwaysAllowEmergencyCalls
     * @return bool|null
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return $this->alwaysAllowEmergencyCalls;
    }

    /**
     * Setter for alwaysAllowEmergencyCalls
     *
     * @ElementName alwaysAllowEmergencyCalls
     * @param bool|null $alwaysAllowEmergencyCalls
     * @return $this
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls)
    {
        $this->alwaysAllowEmergencyCalls = $alwaysAllowEmergencyCalls;
        return $this;
    }


}

