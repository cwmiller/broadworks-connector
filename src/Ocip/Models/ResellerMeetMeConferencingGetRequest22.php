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
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:340","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:340
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

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

