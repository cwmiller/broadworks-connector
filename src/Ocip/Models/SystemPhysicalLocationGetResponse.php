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
     * @Type bool
     * @var bool|null
     */
    private $alwaysAllowEmergencyCalls = null;

    /**
     * Getter for alwaysAllowEmergencyCalls
     *
     * @return bool
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return $this->alwaysAllowEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysAllowEmergencyCalls;
    }

    /**
     * Setter for alwaysAllowEmergencyCalls
     *
     * @param bool $alwaysAllowEmergencyCalls
     * @return $this
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls)
    {
        $this->alwaysAllowEmergencyCalls = $alwaysAllowEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysAllowEmergencyCalls()
    {
        $this->alwaysAllowEmergencyCalls = null;
        return $this;
    }


}

