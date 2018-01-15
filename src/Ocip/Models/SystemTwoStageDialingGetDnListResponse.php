<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTwoStageDialingGetDnListResponse
 *
 * Response to SystemTwoStageDialingGetDnListRequest.
 *           The Two Stage Dialing DN List table column
 *           headings are: "Phone Number",  "Description".
 */
class SystemTwoStageDialingGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName phoneNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $phoneNumberTable = null;

    /**
     * Getter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable($phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }


}

