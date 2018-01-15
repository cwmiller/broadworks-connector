<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAvailableRangesListResponse
 *
 * Response to the GroupDnGetAvailableRangesListRequest.
 *         The response contains the list of group DNs that are not assigned to
 * user, service instances or IMRN pool.
 *         The Dns are returned in a list of DNs or DN ranges and formated in E164
 * format for display.
 */
class GroupDnGetAvailableRangesListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName phoneNumber
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }


}

