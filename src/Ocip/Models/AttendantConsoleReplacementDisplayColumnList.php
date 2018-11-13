<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AttendantConsoleReplacementDisplayColumnList
 *
 * A list of attendant console display columns that replaces a previously
 * configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 */
class AttendantConsoleReplacementDisplayColumnList
{

    /**
     * @ElementName displayColumn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[]
     */
    private $displayColumn = array(
        
    );

    /**
     * Getter for displayColumn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[]
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayColumn;
    }

    /**
     * Setter for displayColumn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[] $displayColumn
     * @return $this
     */
    public function setDisplayColumn(array $displayColumn)
    {
        $this->displayColumn = $displayColumn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayColumn()
    {
        $this->displayColumn = null;
        return $this;
    }

    /**
     * Adder for displayColumn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn $displayColumn
     * @return $this
     */
    public function addDisplayColumn($displayColumn)
    {
        $this->displayColumn[] = $displayColumn;
        return $this;
    }


}

