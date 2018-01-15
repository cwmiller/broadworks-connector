<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVirtualOnNetCallTypeGetListResponse
 *
 * Response to SystemVirtualOnNetCallTypeGetListRequest.
 *         Contains a table with column headings: 
 *         "Virtual On-Net Call Type Name", "Virtual On-Net Call Type CDR Value" 
 *         in a row for each Virtual On-Net Call Type.
 */
class SystemVirtualOnNetCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName virtualOnNetCallTypeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $virtualOnNetCallTypeTable = null;

    /**
     * Getter for virtualOnNetCallTypeTable
     *
     * @ElementName virtualOnNetCallTypeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getVirtualOnNetCallTypeTable()
    {
        return $this->virtualOnNetCallTypeTable;
    }

    /**
     * Setter for virtualOnNetCallTypeTable
     *
     * @ElementName virtualOnNetCallTypeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $virtualOnNetCallTypeTable
     * @return $this
     */
    public function setVirtualOnNetCallTypeTable($virtualOnNetCallTypeTable)
    {
        $this->virtualOnNetCallTypeTable = $virtualOnNetCallTypeTable;
        return $this;
    }


}

