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
     * @var string[]
     */
    private $displayColumn = array(
        
    );

    /**
     * Getter for displayColumn
     *
     * @ElementName displayColumn
     * @return string[]
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn;
    }

    /**
     * Setter for displayColumn
     *
     * @ElementName displayColumn
     * @param string[] $displayColumn
     * @return $this
     */
    public function setDisplayColumn($displayColumn)
    {
        $this->displayColumn = $displayColumn;
        return $this;
    }

    /**
     * Adder for displayColumn
     *
     * @ElementName displayColumn
     * @param string $displayColumn
     * @return $this
     */
    public function addDisplayColumn($displayColumn)
    {
        $this->displayColumn []= $displayColumn;
        return $this;
    }


}

