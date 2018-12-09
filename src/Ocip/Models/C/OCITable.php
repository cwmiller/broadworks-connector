<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCITable
 *
 * The OCITable type is used in responses only, never in requests.
 *         The table consists of rows and columns of strings. Each column has a column
 *         heading. Clients should search the column headings to find a particular
 *         column. Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns.
 *
 * @Groups [{"id":"b5c92103b335c0ad3e7b255e39a5cba4:242","type":"sequence"}]
 */
class OCITable
{

    /**
     * @ElementName colHeading
     * @Type string
     * @Array
     * @Group b5c92103b335c0ad3e7b255e39a5cba4:242
     * @var string[]
     */
    private $colHeading = array(
        
    );

    /**
     * @ElementName row
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow
     * @Array
     * @Optional
     * @Group b5c92103b335c0ad3e7b255e39a5cba4:242
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[]
     */
    private $row = array(
        
    );

    /**
     * Getter for colHeading
     *
     * @return string[]
     */
    public function getColHeading()
    {
        return $this->colHeading instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->colHeading;
    }

    /**
     * Setter for colHeading
     *
     * @param string[] $colHeading
     * @return $this
     */
    public function setColHeading(array $colHeading)
    {
        $this->colHeading = $colHeading;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetColHeading()
    {
        $this->colHeading = null;
        return $this;
    }

    /**
     * Adder for colHeading
     *
     * @param string $colHeading
     * @return $this
     */
    public function addColHeading(string $colHeading)
    {
        $this->colHeading[] = $colHeading;
        return $this;
    }

    /**
     * Getter for row
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[]
     */
    public function getRow()
    {
        return $this->row instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->row;
    }

    /**
     * Setter for row
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow[] $row
     * @return $this
     */
    public function setRow(array $row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRow()
    {
        $this->row = null;
        return $this;
    }

    /**
     * Adder for row
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITableRow $row
     * @return $this
     */
    public function addRow($row)
    {
        $this->row[] = $row;
        return $this;
    }


}

