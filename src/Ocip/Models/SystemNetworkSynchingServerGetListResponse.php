<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerGetListResponse
 *
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Secure", "Description", "Order".
 *         The following columns are only used in XS data mode and not returned in AS data mode:
 *           Order
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           preferredNetworkServerNetAddress
 *
 * @see SystemNetworkSynchingServerGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12901","type":"sequence"}]
 */
class SystemNetworkSynchingServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName preferredNetworkServerNetAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12901
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preferredNetworkServerNetAddress = null;

    /**
     * @ElementName networkSynchingServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12901
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $networkSynchingServerTable = null;

    /**
     * Getter for preferredNetworkServerNetAddress
     *
     * @return string
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return $this->preferredNetworkServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredNetworkServerNetAddress;
    }

    /**
     * Setter for preferredNetworkServerNetAddress
     *
     * @param string $preferredNetworkServerNetAddress
     * @return $this
     */
    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress)
    {
        $this->preferredNetworkServerNetAddress = $preferredNetworkServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredNetworkServerNetAddress()
    {
        $this->preferredNetworkServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for networkSynchingServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkSynchingServerTable()
    {
        return $this->networkSynchingServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSynchingServerTable;
    }

    /**
     * Setter for networkSynchingServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkSynchingServerTable
     * @return $this
     */
    public function setNetworkSynchingServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkSynchingServerTable)
    {
        $this->networkSynchingServerTable = $networkSynchingServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkSynchingServerTable()
    {
        $this->networkSynchingServerTable = null;
        return $this;
    }


}

