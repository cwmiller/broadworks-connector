<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISRequest
 *
 * Get a call center's DNIS.
 *         The response is either a GroupCallCenterGetDNISRequest or an ErrorResponse.
 *
 * @see GroupCallCenterGetDNISRequest
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:3972","type":"sequence"}]
 */
class GroupCallCenterGetDNISRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:3972
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }


}

