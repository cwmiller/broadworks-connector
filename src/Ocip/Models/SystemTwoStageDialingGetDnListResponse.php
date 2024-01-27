<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTwoStageDialingGetDnListResponse
 *
 * Response to SystemTwoStageDialingGetDnListRequest.
 *           The Two Stage Dialing DN List table column
 *           headings are: "Phone Number",  "Description".
 *
 * @see SystemTwoStageDialingGetDnListRequest
 * @Groups [{"id":"103e8fba76512e5a1abfb373758f36e2:98","type":"sequence"}]
 */
class SystemTwoStageDialingGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 103e8fba76512e5a1abfb373758f36e2:98
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $phoneNumberTable = null;

    /**
     * Getter for phoneNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberTable()
    {
        $this->phoneNumberTable = null;
        return $this;
    }
}

