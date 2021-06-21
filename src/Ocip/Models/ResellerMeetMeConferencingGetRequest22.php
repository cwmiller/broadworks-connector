<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingGetRequest22
 *
 * Request the reseller level data associated with Meet-Me Conferencing functions.
 *         The response is either a ResellerMeetMeConferencingGetResponse22 or an
 *         ErrorResponse.
 *         The following data elements are only returned for System and Provisioning Administrators:        
 * 		maxAllocatedPorts.
 * 		The following data elements are only returned for System and Provisioning Administrators and AS Mode Only:
 * 		disableUnlimitedMeetMePorts,
 * 		enableMaxAllocatedPorts.
 *
 * @see ResellerMeetMeConferencingGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:341","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:341
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }


}

