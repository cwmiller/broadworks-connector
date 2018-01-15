<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCITable
 *
 * The OCITable type is used in responses only, never in requests.
 *         The table consists of rows and columns of strings. Each column has a
 * column
 *         heading. Clients should search the column headings to find a particular
 *         column. Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns.
 */
class OCITable
{

    /**
     * @ElementName colHeading
     * @var string[]
     */
    private $colHeading = array(
        
    );

    /**
     * @ElementName row
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[]
     */
    private $row = array(
        
    );

    /**
     * Getter for colHeading
     *
     * @ElementName colHeading
     * @return string[]
     */
    public function getColHeading()
    {
        return $this->colHeading;
    }

    /**
     * Setter for colHeading
     *
     * @ElementName colHeading
     * @param string[] $colHeading
     * @return $this
     */
    public function setColHeading($colHeading)
    {
        $this->colHeading = $colHeading;
        return $this;
    }

    /**
     * Adder for colHeading
     *
     * @ElementName colHeading
     * @param string $colHeading
     * @return $this
     */
    public function addColHeading($colHeading)
    {
        $this->colHeading []= $colHeading;
        return $this;
    }

    /**
     * Getter for row
     *
     * @ElementName row
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[]
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Setter for row
     *
     * @ElementName row
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[] $row
     * @return $this
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * Adder for row
     *
     * @ElementName row
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow $row
     * @return $this
     */
    public function addRow($row)
    {
        $this->row []= $row;
        return $this;
    }


}

